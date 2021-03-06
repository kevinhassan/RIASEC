<?php
require_once("Model.php");

/**
 * Class ModelProposition
 */
class ModelProposition extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "proposition_id";

    /**
     * @var string nom de la table
     */
  protected $table  = "Proposition";

  /**
  * Modifier l'intitulé d'une proposition
  * @param  string $newIntitule Nouvel intitulé de la proposition
  * @param  int $idProposition id de la proposition à modifier
  **/
  public function editIntitule($newIntitule, $idProposition){
    try{
      $sql = 'UPDATE '.$this->table.' SET intitule = :newIntitule WHERE '.$this->pk_key.' = :idProposition';
      $req = $this->query($sql,array(":newIntitule"=> $newIntitule,
                                    ":idProposition"=>$idProposition));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification de l'intitulé de la proposition dans la table " . $this->table);
    }
  }
  /**
  * Selectionner toutes les propositions d'un groupe
  * @param int $idGroupe identifiant du groupe
  * @return array renvoie toutes les propositions d'un groupe
  **/
  public function selectByGroupe($idGroupe){
    try{
      $sql = 'SELECT * FROM '.$this->table.' WHERE groupe_id = :idGroupe';
      $req = $this->query($sql,array(":idGroupe"=>$idGroupe));
      $res = $req->fetchAll(PDO::FETCH_ASSOC);
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
