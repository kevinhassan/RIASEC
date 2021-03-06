<?php
require_once(MODEL_PATH . "ModelEtudiant.php");
require_once(MODEL_PATH . "ModelAdministrateur.php");

/**
 * Class ErrorController
 */
class ErrorController extends Controller {

    /**
     * Afficher un message d'erreur si la page n'existe pas
     */
    public function error404(){
        if(isset($_COOKIE["token"])){
            $this->view->userData = decodeToken($_COOKIE["token"])["data"];
        }
        else{
            $this->view->userData = null;
        }
        $this->view->display();
    }
}