<?php
require_once(MODEL_PATH . "ModelEtudiant.php");
require_once(MODEL_PATH . "ModelAdministrateur.php");
require_once(MODEL_PATH . "ModelClasse.php");

/**
 * Class RegisterController
 */
class RegisterController extends Controller {

    /**
     * Afficher la page pour enregistrer un étudiant
     * Seul un visiteur avec le code peut y accèder
     * Sinon il sera renvoyé à l'accueil
     **/
    public function displayRegisterEtudiant() {
        if (estEtudiant())
            header('Location: ./');
        else{
            $this->view->userData = null;
            $this->view->display();
        }
    }
    /**
     * Afficher la page pour enregistrer un administrateur
     * Seul un administrateur peut
     * Sinon il sera renvoyé à l'accueil
     **/
    public function displayRegisterAdmin() {
        if (estAdmin()){
            $this->view->userData = decodeToken($_COOKIE["token"])["data"];
            $this->view->display();
        }
        else {
            header('Location: ./');
        }
    }
    /**
     * Fonction qui vérifie les données entrées et créée l'étudiant à partir du formulaire
     **/
    public function addEtudiant(){
        if (isset($_POST['prenom'], $_POST['nom'],$_POST['codeClasse'], $_POST['mail'], $_POST['mdp'])){
            //Echappement (script injection, sql injection, ...)
            //Suppression des caractères invisibles
            $prenom = htmlspecialchars(trim($_POST['prenom']));
            $nom = htmlspecialchars(trim($_POST['nom']));
            $codeClasse = htmlspecialchars((trim($_POST['codeClasse'])));
            $mail = htmlspecialchars(trim($_POST['mail']));
            $mdp = htmlspecialchars(trim($_POST['mdp']));

            //Met le prénom et le nom avec première lettre en majuscule et le reste en minuscule
            $prenom = strtolower($prenom);
            $nom = strtolower($nom);
            $prenom = ucfirst($prenom);
            $nom = ucfirst($nom);

            //On met le code de classe et le mail en minuscule
            $mail = strtolower($mail);

            /**
             * Requêter sur le code de classe pour connaitre l'id de la classe
             */
            $modelClasse = new ModelClasse();
            $classe = $modelClasse->selectByCode($codeClasse);
            /**
             * Cryptage du mot de passe en SHA256 avec 5000 boucles de hachage
             */
            $newMdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');

            //Ajout dans un tableau associatif
            $data = array(
                "prenom"=>$prenom,
                "nom"=>$nom,
                "classe_id"=> $classe["classe_id"],
                "mail"=>$mail,
                "mdp"=>$newMdp
            );
            //Création
            $etudiant = new ModelEtudiant();
            $etudiant -> createEtudiant($data);
        }
        else{
            //Renvoyer vers le formulaire avec un message d'erreur !
        }
        $this->view->userData = null;
        $this->view->display();
    }

    /**
     * Fonction qui vérifie les données entrées et créée l'admin à partir du formulaire
     **/
    public function addAdmin(){
        if(estAdmin()){
            if (isset($_POST['prenom'], $_POST['nom'], $_POST['mail'])){
                //Echappement (script injection, sql injection, ...)
                //Suppression des caractères invisibles
                $prenom = htmlspecialchars(trim($_POST['prenom']));
                $nom = htmlspecialchars(trim($_POST['nom']));
                $mail = htmlspecialchars(trim($_POST['mail']));
                $mdp = 'admin';//Mot de passe par default

                //Met le prénom et le nom avec première lettre en majuscule et le reste en minuscule
                $prenom = strtolower($prenom);
                $nom = strtolower($nom);
                $prenom = ucfirst($prenom);
                $nom = ucfirst($nom);
                //On met le code de classe et le mail en minuscule
                $mail = strtolower($mail);

                /**
                 * Cryptage du mot de passe en SHA256 avec 5000 boucles de hachage
                 */
                $newMdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');

                //Ajout dans un tableau associatif
                $data = array(
                    "prenom"=>$prenom,
                    "nom"=>$nom,
                    "mail"=>$mail,
                    "mdp"=>$newMdp
                );
                //Création
                $admin = new ModelAdministrateur();
                $admin -> createAdministrateur($data);
                $this->view->userData = decodeToken($_COOKIE["token"])["data"];
                $this->view->display();
            }else{
                header('Location: ./query=register/admin/addAdmin');
            }
        }
        else{
            header('Location: ./query=login/admin');
        }
    }
    /**
     * Fonction qui vérifie le code de classe en fournissant un service à Semantic-ui
     * Fonction D'API
     */
    public function checkCode(){
        $modelClasse = new ModelClasse();
        $classe = $modelClasse->selectByCode($this->route["params"]["codeClasse"]);
        $response = Array("success"=>$classe && sizeof($classe)>0   );
        echo json_encode($response);
    }
    /**
     * Fonction qui vérifie l'existance d'un mail en fournissant un service à Semantic-ui
     * Fonction D'API
     */
    public function checkMail(){
        if($this->route["params"]["role"] === 'etudiant'){
            $modelEtudiant = new ModelEtudiant();
            $individu = $modelEtudiant->selectByMail($this->route["params"]["mail"]);
        }
        else{
            $modelAdmin = new ModelAdministrateur();
            $individu = $modelAdmin->selectByMail($this->route["params"]["mail"]);
        }
        $response = Array("success"=>$individu && sizeof($individu)>0);
        echo json_encode($response);
    }
}
