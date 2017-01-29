<?php
require_once("Model.php");

/**
 * Class ModelRepondre
 */
class ModelRepondre extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "etudiant_id";
    /**
     * @var string nom de la deuxième clé primaire de la table
     */
  protected $pk_key2 = "groupe_id";

    /**
     * @var string nom de la table
     */
  protected $table  = "Repondre";

  /**
  * Créer une réponse
  * @param int $idEtudiant identifiant de l'étudiant
  * @param int $idGroupe identifiant du groupe
  * @param int[3] $data Tableau contenant 3 identifiants dont les index donnent l'ordre de préférence des propositions
  **/
  public function createReponse($idEtudiant,$idGroupe,$data){
    try{
      $sql = 'INSERT INTO '.$this->table.'(etudiant_id,groupe_id,choix1,choix2,choix3)
      VALUES(:idEtudiant,:idGroupe,:idChoix1,:idChoix2,:idChoix3)';
      $req = $this->query($sql,array(':idEtudiant'=>$idEtudiant,
                                    ':idGroupe'=>$idGroupe,
                                    ':idChoix1'=>$data[0],
                                    ':idChoix2'=>$data[1],
                                    ':idChoix3'=>$data[2],
                                  ));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout d'un résultat à la table " . $this->table);
    }
  }
  /**
  * Selectionner toutes les réponses d'un étudiant et d'un groupe
  * @param int $idEtudiant identifiant de l'étudiant
  * @param int $idGroupe identifiant du groupe
  * @return int[3] $data retourne les 3 réponses de l'étudiant choisies dans un groupe
  **/
  public function selectByGroupeEtudiant($idEtudiant,$idGroupe){
    try{
      $sql = 'SELECT choix1,choix2,choix3 FROM '.$this->table.' WHERE '.$this->pk_key.' = :idEtudiant AND '.$this->pk_key2.' = :idGroupe';
      $req = $this->query($sql,array(":idEtudiant" => $idEtudiant,
                                     ":idGroupe" => $idGroupe));
      $res = $req->fetchAll(PDO::FETCH_NUM);
      return $res;
    }
    catch (PDOException $e)
    {
      echo($e->getMessage());
      die("<br> Erreur lors de la recherche de toutes les propositions de ce groupe dans la table " . $this->table);
    }
  }

  /**
   * Selectionner pour l'étudiant l'id maximum du groupe
   * @param  int $idEtudiant identifiant de l'étudiant
   * @return Retourne les 3 réponses de l'étudiant choisies dans un groupe
   **/
    public function selectMaxGroupe($idEtudiant){
        try{
            $sql = 'SELECT MAX('.$this->pk_key2.') FROM '.$this->table.' WHERE '.$this->pk_key.' = :idEtudiant';
            $req = $this->query($sql,array(":idEtudiant" => $idEtudiant));
            $res = $req->fetch(PDO::FETCH_NUM);
            return $res;
        }
        catch (PDOException $e)
        {
            echo($e->getMessage());
            die("<br> Erreur lors de la recherche du groupe maximum dans la table " . $this->table);
        }
    }
    /**
     * Selectionner pour l'étudiant les groupes et propositions associées
     * @param  int $idEtudiant identifiant de l'étudiant
     * @return Retourne les 3 réponses de l'étudiant ainsi que son groupe
     **/
    public function getAllChoix($idEtudiant){
        try{
            $sql = 'SELECT groupe_id, choix1,choix2,choix3 FROM '.$this->table.' WHERE '.$this->pk_key.' = :idEtudiant';
            $req = $this->query($sql,array(":idEtudiant" => $idEtudiant));
            $res = $req->fetchAll(PDO::FETCH_NUM);
            return $res;
        }
        catch (PDOException $e)
        {
            echo($e->getMessage());
            die("<br> Erreur lors de la recherche de toutes les propositions de ce groupe dans la table " . $this->table);
        }
    }
}
?>
