<?php

require_once(MODEL_PATH . "ModelEtudiant.php");
require_once(MODEL_PATH . "ModelAdministrateur.php");

/**
 * Class LoginController
 */
class LoginController extends Controller {
    /**
     * On affiche la page de login si l'utilisateur n'est pas déjà connecté
     * Sinon on redirige vers l'accueil
     */
    public function display() {
        if (!isset($_COOKIE["token"])) {
            $etudiant = new ModelEtudiant();
            $admin = new ModelAdministrateur();
            $this->view->nbEtudiant = $etudiant->countAll();
            $this->view->nbAdmin = $admin->countAll();
            $this->view->display();
        }else{
            header('Location: ./'); //redirection d'erreur
        }
    }

    /**
     * On affiche la page du login admin
     * Sinon on redirige vers l'accueil
     */
    public function displayAdmin(){
        if (!isset($_COOKIE["token"])) {
            $this->view->display();
        }else{
            header('Location: ./'); //redirection d'erreur
        }
    }
    /**
     * On affiche la page du login etudiant
     * Sinon on redirige vers l'accueil
     */
    public function displayEtudiant(){
        if (!isset($_COOKIE["token"])) {
            $this->view->display();
        }else{
            header('Location: ./'); //redirection d'erreur
        }
    }
    /**
     * Verifier que l'étudiant est dans la base de donnée
     * S'il existe on compare son mot de passe avec celui sur la BD et on lui affecte un token si c'est bon
     * Sinon on retourne sur le formulaire avec un message d'erreur
     */
    public function connectEtudiant(){
        if (!isset($_COOKIE["token"])) {
            if (isset($_POST["mail"]) && isset($_POST["mdp"])) {
                // On sécurise les données passé par le formulaire
                $mail = strtolower(htmlspecialchars(trim($_POST["mail"])));
                $mdp = htmlspecialchars(trim($_POST["mdp"]));

                $modelEtudiant = new ModelEtudiant();
                $etudiant = $modelEtudiant->selectByMail($mail);

                if ($etudiant && sizeof($etudiant) > 0) {
                    if (crypt($mdp, $etudiant["mdp"]) == $etudiant["mdp"]) {
                        $data = Array("idUser" => $etudiant["etudiant_id"],
                            "role" => "etudiant");
                        $token = generateToken($data);
                        setcookie("token", $token, time() + (3600 * 25), "/");
                        header("Location: ./");                          // Redirection vers l'accueil
                    } else {
                        $message = "Le mot de passe est incorrect";
                    }
                } else {
                    $message = "Cet étudiant n'existe pas";
                }
            } else {
                $message = "Les données sont incorrectes";
            }
            echo $message;
        }else{
            header('Location: ./?query=login/etudiant');
        }
    }
    public function connectAdmin(){
        if (!isset($_COOKIE["token"])) {
            if (isset($_POST["mail"]) && isset($_POST["mdp"])) {
                $mail = strtolower(htmlspecialchars(trim($_POST["mail"])));
                $mdp = htmlspecialchars(trim($_POST["mdp"]));

                $modelAdmin = new ModelAdministrateur();
                $admin = $modelAdmin->selectByMail($mail);

                if ($admin && sizeof($admin) > 0) {
                    if (crypt($mdp, $admin["mdp"]) == $admin["mdp"]) {
                        $data = Array("idUser" => $admin["admin_id"],
                            "role" => "admin");
                        $token = generateToken($data);
                        echo $token;
                        setcookie("token", $token, time() + (3600 * 25), "/");
                        header("Location: ./?query=dashboard");                          // Redirection vers le dashboard
                    } else {
                        $message = "Le mot de passe est incorrect";
                    }
                } else {
                    $message = "L'administrateur n'existe pas ";
                }
            } else {
                $message = "Les données sont incorrectes";
            }
            echo $message;
        }else{
            header('Location: ./?query=login/admin');
        }
    }

    /**
     * Se déconnecter et renvoyer vers l'accueil
     */
    public function disconnect(){
        if (isset($_COOKIE["token"])) {
            setcookie("token", "", time() - 1000000, '/');
            unset($_COOKIE["token"]);
        }
        header('Location: ./');
    }
}