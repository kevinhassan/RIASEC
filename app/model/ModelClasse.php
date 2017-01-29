<?php

require_once("Model.php");

/**
 * Class ModelClasse
 */
class ModelClasse extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "classe_id";

    /**
     * @var string nom de la table
     */
  protected $table  = "Classe";

  /**
  * Créer un code pour la classe
  * @param int $idPromotion
  * @param int $idDepartement
  * @param string $codeClasse
  **/
  public function createCode($idPromotion,$idDepartement,$codeClasse){
    try{
      $sql = 'INSERT INTO '.$this->table.'(promotion_id,departement_id,code)
      VALUES(:idPromotion,:idDepartement,:code)';
      $req = $this->query($sql,array(':idPromotion' => $idPromotion,
                                      ':idDepartement' => $idDepartement,
                                      ':code'=> $codeClasse));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout du code dans la table " . $this->table);
    }
  }

  /**
  * Selectionner la classe correspondant au département et à la promo
  * @param Int $idDepartement Identifiant du département
  * @param Int $idPromotion Identifiant de la promotion
  * @return array La classe correspondante
  */
  public function selectByDeptPromo($idDepartement,$idPromotion){
    try{
      $sql = 'SELECT * FROM '.$this->table.' WHERE promotion_id = :idPromotion
      AND departement_id = :idDepartement';
      $req = $this->query($sql,array(':idPromotion'=> $idPromotion,
                                      ':idDepartement'=> $idDepartement));
      $res = $req->fetch(PDO::FETCH_ASSOC);
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la recherche du code dans la table  " . $this->table);
    }
  }
    /**
     * Selectionner la classe par son code
     * @param string $codeClasse Identifiant la classe de manière unique
     * @return Array La classe correspondante
     **/
    public function selectByCode($codeClasse){
        try{
            $sql = 'SELECT * FROM '.$this->table.' WHERE code = :codeClasse';
            $req = $this->query($sql,array(':codeClasse'=> $codeClasse));
            $res = $req->fetch(PDO::FETCH_ASSOC);
            return $res;
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la recherche du code dans la table " . $this->table);
        }
    }
    /**
     * Supprimer une classe par son id
     * @param int $id identifiant de la classe
     **/
    public function deleteById($id){
        try{
            $sql = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
            $req = $this->query($sql,array(':id'=>$id));
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la suppression de la classe dans la table ". $this->table);
        }
    }
}
?>
