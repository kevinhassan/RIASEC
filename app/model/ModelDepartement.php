<?php

require_once("Model.php");

/**
 * Class ModelDepartement
 */
class ModelDepartement extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "departement_id";

    /**
     * @var string nom de la table
     */
  protected $table  = "Departement";

   /**
  * Modification du département
  * @param int $idDepartement département à modifier
  * @param string $libelle  nouveau libelle du département
  **/
   public function editDepartement($idDepartement, $libelle){
    try{
      $sql = 'UPDATE '.$this->table.' SET libelle = :libelle WHERE '.$this->pk_key.' = :idDepartement';
      $req = $this->query($sql,array(":libelle"=> $libelle,
                                    ":idDepartement"=>$idDepartement));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification du département " . $this->table);
    }
  }
  /**
  * Selection d'un département par son libellé
  * @param string libelle chaîne de caractère unique
  * @return array département recherché
  **/
  public function selectByLibelle($libelle){
    try{
      $sql = 'SELECT * FROM '.$this->table.' WHERE libelle = :libelle';
      $req = $this->query($sql,array(':libelle'=> $libelle));
      $res = $req->fetch(PDO::FETCH_ASSOC);
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la recherche du libelle dans la table  " . $this->table);
    }
  }
}
?>
