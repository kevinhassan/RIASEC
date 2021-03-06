<?php

require_once(MODEL_PATH . "ModelEtudiant.php");

/**
 * Class IndexController
 */
class IndexController extends Controller {

    /**
     * Verifier que l'étudiant n'a pas déjà passé le questionnaire
     * Il suffit de regarder dans la table répondre s'il a un profil attribué
     * Dans ce cas on affiche le bouton questionnaire
     * Sinon on affiche le bouton pour consulter ses résultats
     */
    public function display() {
        if(isset($_COOKIE["token"])){
            $modelEtudiant = new ModelEtudiant();
            $this->view->userData = decodeToken($_COOKIE["token"])["data"];
            $etudiant = $modelEtudiant->selectById($this->view->userData ["idUser"]);
            $this->view->questionnaireRealise = $etudiant["personnalite_id"];
        }
        $this->view->display();
   }
}
