<?php

require_once("Model.php");

/**
 * Class ModelAdministrateur
 */
class ModelAdministrateur extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "admin_id";


    /**
     * @var string nom de la table
     */
  protected $table  = "Administrateur";

  /**
   * Selectionner tous les administrateurs de la table sauf soit même
   * @param int $idAdmin identifiant de l'administrateur
   * @return array La liste ne contient pas l'id de l'administrateur passé en paramètres
   */
  public function selectAll($idAdmin){
      try{
          $sql = 'SELECT '.$this->pk_key.',nom, prenom, mail  FROM '.$this->table.' WHERE '.$this->pk_key.' != '.$idAdmin;
          $req = $this->query($sql);
          $res = $req->fetchAll(PDO::FETCH_ASSOC);
          return $res;
      }
      catch (PDOException $e)
      {
          echo($e->getMessage());
          die("<br> Erreur lors de la recherche de tous les objets de la table " . $this->table);
      }
  }

  /**
  * Créer un compte administrateur
  * @param Array $data tableau associatif contenant le nom, prenom, mail et mdp crypté à insérer
  */
  public function createAdministrateur($data){
    try{
      $sql = 'INSERT INTO '.$this->table.' (nom,prenom,mail,mdp) VALUES(:nom,:prenom,:mail,:mdp)';

      $req = $this->query($sql,array(
                              ':nom'=> $data['nom'],
                              ':prenom'=> $data['prenom'],
                              ':mail'=> $data['mail'],
                              ':mdp' => $data['mdp']));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout d'un administrateur à la table " . $this->table);
    }
  }
  /**
   * Selectionner un administrateur par son mail
   * @param  String $mail adresse e-mail de l'admin
   * @return Array contenant l'administrateur
   **/
  public function selectByMail($mail){
    try{
      $sql = 'SELECT * FROM '.$this->table.' WHERE mail = :mail';
      $req = $this->query($sql,array(":mail"=>$mail));
      $res = $req->fetch(PDO::FETCH_ASSOC);
      return $res;
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la selection de l'administrateur dans la table " . $this->table);
    }
  }

  /**
  * Modifier le mot de passe
  * @param  String $newMdp nouveau mot de passe
  * @param  Int $idAdministrateur id de l'administrateur
  **/
  public function editMdpAdmin($newMdp, $idAdministrateur){
    try{
      $sql = 'UPDATE '.$this->table.' SET mdp = :newMdp WHERE '.$this->pk_key.' = :idAdministrateur';
      $req = $this->query($sql,array(':newMdp' => $newMdp,
                                     ':idAdministrateur' => $idAdministrateur));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification du mot de passe dans la table " . $this->table);
    }
  }
    /**
     * Supprimer un administrateur
     * @param int $id identifiant de l'administrateur
     **/
    public function deleteById($id){
        try{
            $sql = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
            $req = $this->query($sql,array(':id'=>$id));
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la suppression de l'administrateur dans la table ". $this->table);
        }
    }
}
?>
