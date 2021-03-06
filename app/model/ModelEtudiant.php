<?php

require_once("Model.php");

/**
 * Class ModelEtudiant
 */
class ModelEtudiant extends Model{

    /**
     * @var string nom de la clé primaire de la table
     */
  protected $pk_key = "etudiant_id";

    /**
     * @var string nom de la table
     */
  protected $table  = "Etudiant";

  /**
   * Retourne les étudiants sans leurs mot de passe
   * @inheritDoc
   **/
  public function selectAll(){
        try{
            $sql = 'SELECT '.$this->pk_key.',nom, prenom, mail  FROM '.$this->table;
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
  * Créer le profil d'un étudiant
  * @param array $data donnée provenant d'un formulaire
  **/
  public function createEtudiant($data){
    try{
      $sql = 'INSERT INTO '.$this->table.'(nom,prenom,mail,mdp,classe_id) VALUES(:nom,:prenom,:mail,:mdp,:idClasse)';
      $req = $this->query($sql,array(
                              ':nom'=> $data['nom'],
                              ':prenom'=> $data['prenom'],
                              ':mail'=> $data['mail'],
                              ':mdp' => $data['mdp'],
                              ':idClasse'=>$data['classe_id']));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de l'ajout d'un étudiant à la table " . $this->table);
    }
  }
  /**
  * Modifier le mot de passe
  * @param string $newMdp nouveau mot de passe
  * @param int $idEtudiant id de l'étudiant
  **/
  public function editMdpEtudiant($newMdp, $idEtudiant){
    try{
      $sql = 'UPDATE '.$this->table.' SET mdp = :newMdp WHERE '.$this->pk_key.' = :idEtudiant';
      $req = $this->query($sql,array(':newMdp' => $newMdp,
                                     ':idEtudiant' => $idEtudiant));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification du mot de passe dans la table " . $this->table);
    }
  }
  /**
  * Modifier la classe de l'étudiant (en cas de redoublement)
  * @param int $idEtudiant id de l'étudiant
  * @param int $newIdClasse id de la nouvelle classe
  **/
  public function editClasse($idEtudiant,$newIdClasse){
    try{
      $sql = 'UPDATE '.$this->table.' SET classe_id = :newClasse WHERE '.$this->pk_key.' = :idEtudiant';
      $req = $this->query($sql,array(':newClasse' => $newIdClasse,
                                     ':idEtudiant' => $idEtudiant));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification de la classe dans la table " . $this->table);
    }
  }
  /**
   * Ajouter une personnalite à un etudiant
   * @param int $idEtudiant id de l'étudiant
   * @param int $idPersonnalite id de la personnalite
   **/
  public function editPersonnalite($idEtudiant,$idPersonnalite){
    try{
      $sql = 'UPDATE '.$this->table.' SET personnalite_id = :idPersonnalite WHERE '.$this->pk_key.' = :idEtudiant';
      $req = $this->query($sql,array(':idPersonnalite' => $idPersonnalite,
                                     ':idEtudiant' => $idEtudiant));
    }
    catch(PDOException $e){
      echo($e->getMessage());
      die("<br> Erreur lors de la modification de la personnalite dans la table " . $this->table);
    }
  }
  /**
   * Selectionner un étudiant par son mail
   * @param string $mail adresse e-mail de l'étudiant
   * @return array Etudiant concerné par l'email
   **/
  public function selectByMail($mail){
      try{
          $sql = 'SELECT * FROM '.$this->table.' WHERE  mail = :mail';
          $req = $this->query($sql,array(":mail"=>$mail));
          $res = $req->fetch(PDO::FETCH_ASSOC);
          return $res;
      }
      catch(PDOException $e){
          echo($e->getMessage());
          die("<br> Erreur lors de la recherche de l'étudiant dans la table " . $this->table);
      }
  }
    /**
     * Compter le nombre de personnalité dans la classe
     * @param int $idClasse identifiant de la classe
     * @param int $idPersonnalite identifiant de la personnalité
     * @return int Nombre d'étudiant dans la classe de la personnalité
     */
  public function countByClassePersonnalite($idClasse,$idPersonnalite){
      try{
          $sql = 'SELECT COUNT(*) FROM '.$this->table.' WHERE  classe_id = :idClasse AND personnalite_id = :idPersonnalite';
          $req = $this->query($sql,array(":idClasse"=>$idClasse,
                                        ":idPersonnalite"=>$idPersonnalite));
          $res = $req->fetch(PDO::FETCH_NUM);
          return $res;
      }
      catch(PDOException $e){
          echo($e->getMessage());
          die("<br> Erreur lors de du comptage des étudiant de la classe et personnalite " . $this->table);
      }
  }
    /**
     * Compter le nombre d'étudiant dans une classe
     * @param int $idClasse identifiant de la classe
     * @return int nombre d'élève dans la classe
     */
  public function countByClasse($idClasse){
      try{
          $sql = 'SELECT COUNT(*) FROM '.$this->table.' WHERE  classe_id = :idClasse';
          $req = $this->query($sql,array(":idClasse"=>$idClasse));
          $res = $req->fetch(PDO::FETCH_NUM);
          return $res;
      }
      catch(PDOException $e){
          echo($e->getMessage());
          die("<br> Erreur lors de du comptage des étudiant de la classe " . $this->table);
      }
  }
    /**
     * Supprimer un étudiant
     * @param int $id identifiant de l'étudiant
     **/
    public function deleteById($id){
        try{
            $sql = 'DELETE FROM '.$this->table.' WHERE '.$this->pk_key.'= :id';
            $req = $this->query($sql,array(':id'=>$id));
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la suppression de l'étudiant dans la table ". $this->table);
        }
    }
    /**
     * Selectionner un étudiant par sa classe
     * @param int $idClasse la classe de l'étudiant
     * @return array liste des étudiants de la classe
     **/
    public function selectByClasse($idClasse){
        try{
            $sql = 'SELECT etudiant_id,nom,prenom,mail FROM '.$this->table.' WHERE  classe_id = :idClasse';
            $req = $this->query($sql,array(":idClasse"=>$idClasse));
            $res = $req->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }
        catch(PDOException $e){
            echo($e->getMessage());
            die("<br> Erreur lors de la recherche des étudiants de la classe dans la table " . $this->table);
        }
    }

}
?>
