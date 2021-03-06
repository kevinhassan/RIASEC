<?php

/**
 * Class DashboardController
 */
class DashboardController extends Controller{

    /**
     * Si on est admin on affiche le dashboard
     * Sinon on renvoie vers la page de login
     */
    public function display(){
        if (estAdmin()){
            $this->view->userData = decodeToken($_COOKIE["token"])["data"];
            $this->view->display();
        }
        else{
            header('Location: ./?query=login/admin'); //Redirection vers une page d'erreur
        }
    }

}