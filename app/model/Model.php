<?php

/**
 * Class Model
 * Permet de factoriser la connexion à la base de donnée.
 * Réunis les requêtes communes à tous les modèles
 */
abstract class Model {
    /**
     * @var objet pdo permettabt de requêter sur une base de donnée
     */
   protected $bd;
    /**
     * @var string nom de la clé primaire de la table
     */
   protected $pk_key;
    /**
     * @var string nom de la table
     */
   protected $table;
  /**
  * Envoyer des requêtes à la BD
  * @param String $sql requête SQL bien formée
  * @param Array params les paramétres passés
  * @return renvoie le résultat de la requête
  **/
  protected function query($sql, $params = null) {
    if ($params == null) {
      $resultat = $this->connexion()->query($sql);    // exécution directe
    }
    else {
      $resultat = $this->connexion()->prepare($sql);  // requête préparée
      $resultat->execute($params);
    }
    return $resultat;
  }

  /**
  * Se connecter à la BD.
  * Si l'objet PDO n'est pas encore instancié on le recrée.
  * Sinon on le retourne.
  * @return PDO
   **/
  protected function connexion() {
    if ($this->bd == null) {
      // Création de la connexion
      $dbname='';
      $host='';
      $dbuser='';
      $dbpass='';

      try
      {
        $bd = new PDO("pgsql:host=$host;dbname=$dbname;", $dbuser, $dbpass);
        $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bd;
      }
      catch (PDOException $e)
      {
        echo $e->getMessage();
        die('<br> Echec lors de la connexion à la BD');
      }
    }
    return $this->bd;
  }

  /**
  * Liste tous les objets d'une table
  * @return Array contenant tous les objets de la table
  **/
  public function selectAll(){
    try{
      $sql = 'SELECT * FROM '.$this->table;
      $req = $this->query($sql);
      $res = $req->fetchAll(PDO::FETCH_ASSOC);
      return $res;
    }
    catch (PDOException $e)
    {
      echo($e->getMessage());
      die("<br> Erreur lors de la recherche de tous les objets de la table" . $this->table);
    }
  }
  /**
  * Selectionner un objet d'une table
  * @param  int $id idenfiant un seul objet
  * @return Array un seul objet correspondant au paramètre passé
  **/
  public function selectById($id){
    try{
      $sql = 'SELECT * FROM '.$this->table.' WHERE '.$this->pk_key.' = :id';
      $req = $this->query($sql,array(":id"=>$id));
      $res = $req->fetch(PDO::FETCH_ASSOC);
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la selection de l'objet dans la table " . $this->table);
    }
  }
  /**
   * Compter le nombre d'entité
   * @return int Nombre d'individu de la table
   **/
  public function countAll(){
    try{
      $sql = 'SELECT COUNT(*) FROM '.$this->table;
      $req = $this->query($sql);
      $res = $req->fetchColumn();//Retourner l'entier
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors du comptage dans la table ". $this->table);
    }
  }
}
?>
