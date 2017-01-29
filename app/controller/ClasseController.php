<?php
require_once(MODEL_PATH . "ModelClasse.php");
require_once(MODEL_PATH . "ModelDepartement.php");
require_once(MODEL_PATH . "ModelPromotion.php");
require_once(MODEL_PATH . "ModelEtudiant.php");

/**
 * Class ClasseController
 */
class ClasseController extends Controller
{
    /**
     * Afficher la liste des classes si on est admin
     * Renvoyer vers la page de login si on n'est pas admin
     */
    public function display()
    {
        if (estAdmin()) {
            $modelDepartement = new ModelDepartement();
            $modelClasse= new ModelClasse();
            $modelPromotion = new ModelPromotion();
            $token = decodeToken($_COOKIE["token"])["data"];
            $this->view->userData = $token;
            $classes = array();

            /**
             * Mettre une boucle for et remplacer 0 par un i[0,n] avec n la taille du tableau
             * renvoyé par le selectAll
             */
            $allClasse = $modelClasse->selectAll();
            for ($i=0; $i< sizeof($allClasse);$i++){
                $classe = $allClasse[$i];
                //Récupérer le code de la classe
                $code = $classe['code'];
                //Récupérer le libellé du département
                $idDepartement = $classe['departement_id'];
                $libelleDepartement = $modelDepartement->selectById($idDepartement)['libelle'];
                //Récupérer l'année de diplome
                $idPromotion = $classe['promotion_id'];
                $anneeDiplome = $modelPromotion->selectById($idPromotion)['anneeDiplome'];

                $data = array('classe_id'=>$classe["classe_id"],'departement'=>$libelleDepartement,'code'=> $code,'anneeDiplome'=> $anneeDiplome); // ajouter année de diplome dedans
                array_push($classes,$data);

            }
            $this->view->classes = $classes;
            $this->view->display();
        }else{
            header('Location: ./?query=login/admin');
        }
    }

    /**
     * Si on est admin et qu'on a ajouté un admin on renvoie vers une page de confirmation
     * Sinon on renvoie vers la page de login
     */
    public function addDisplay(){
        if (estAdmin()) {
            $modelDepartement = new ModelDepartement();
            $modelPromotion = new ModelPromotion();
            $token = decodeToken($_COOKIE["token"])["data"];
            $this->view->userData = $token;
            $this->view->departements = $modelDepartement->selectAll();
            $this->view->promotions = $modelPromotion->selectAll();

            $this->view->display();
        }else{
            header('Location: ./?query=login/admin');
        }
    }

    /**
     * Si on est admin on ajouter une classe avec la promotion associée
     * Sinon on renvoie vers la page de login
     */
    public function addClasse(){
        if (estAdmin() && isset($_POST)) {
            $modelClasse= new ModelClasse();
            $modelDepartement = new ModelDepartement();
            $modelPromotion = new ModelPromotion();
            //On récupère les noms correspondant aux id choisi par l'admin
            $libellePromo = $modelPromotion->selectById($_POST['promotion_id'])['anneeDiplome'];
            $libelleDept = $modelDepartement->selectById($_POST['departement_id'])['libelle'];

            $codeClasse = $libelleDept . $libellePromo;
            $modelClasse->createCode($_POST['promotion_id'],$_POST['departement_id'],$codeClasse);
            header('Location: ./?query=classe');
        }else{
            header('Location: ./?query=login/admin');
        }
    }
    /**
     * Si on est admin on ajoute une promotion
     * Sinon on renvoie vers la page de login
     */
    public function addPromo(){
        if (estAdmin() && isset($_POST)) {
            if(isset($_POST)) {
                $modelPromotion = new ModelPromotion();
                $modelPromotion->createPromotion($_POST['anneeDiplome']);
            }
            header('Location: ./?query=classe/add');
        }else{
            header('Location: ./?query=login/admin');
        }
    }
    /**
     * Si on est admin on ajoute une promotion
     * Sinon on renvoie vers la page de login
     */
    public function remove()
    {
        if (estAdmin()) {
            if(isset($_POST)){
                $modelClasse = new ModelClasse();
                foreach ($_POST as $key=>$value){
                    $modelClasse->deleteById($key);
                }
            }
            header('Location: ./?query=classe');
        }
        else{
            header('Location: ./?query=login/admin'); //Redirection page d'erreur
        }
    }
    /**
     * Si on est admin on liste les étudiants
     * Sinon on renvoie vers la page de login
     */
    public function displayEtudiants(){
        if (estAdmin()) {
            $modelEtudiant = new ModelEtudiant();
            $modelEtudiant->selectAll();
            $etudiants = $modelEtudiant->selectByClasse($this->route["params"]["idClasse"]);
            $token = decodeToken($_COOKIE["token"])["data"];
            $this->view->userData = $token;
            $this->view->etudiants = $etudiants;
            $this->view->display();
        }
        else{
            header('Location: ./?query=login/admin'); //Redirection page d'erreur
        }
    }
    /**
     * Si on est admin on supprime un étudiant
     * Sinon on renvoie vers la page de login
     */
    public function removeEtudiant(){
        if (estAdmin()) {
            if(isset($_POST)){
                $modelEtudiant = new ModelEtudiant();
                foreach ($_POST as $key=>$value){
                    $modelEtudiant->deleteById($key);
                }
            }
            header('Location: ./?query=classe');
        }
        else{
            header('Location: ./?query=login/admin'); //Redirection page d'erreur
        }
    }
    /**
     * Si on est admin on reinitialiser le mot de passe
     * Sinon on renvoie vers la page de login
     */
    public function resetMdpEtudiant(){
        if (estAdmin()) {
            $modelEtudiant = new ModelEtudiant();
            $newMdp = 'motdepasse';
            $newMdp = crypt($newMdp,'$5$rounds=5000$anexamplestringforsalt$');
            $modelEtudiant->editMdpEtudiant($newMdp,$this->route["params"]["idEtudiant"]);
            header('Location: ./?query=classe');
        }
        else{
            header('Location: ./?query=login/admin'); //Redirection page d'erreur
        }
    }
    /**
     * Si on est admin on affiche les stats sur la promotion
     * Sinon on renvoie vers la page de login
     */
    public function displayStats(){
        if (estAdmin()) {
            if (isset($_POST)) {
                $token = decodeToken($_COOKIE["token"])["data"];
                $this->view->userData = $token;

                $modelEtudiant= new ModelEtudiant();
                $modelDepartement = new ModelDepartement();
                $modelPromotion = new ModelPromotion();
                $modelClasse = new ModelClasse();
                $results = array(array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0),array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0));
                $i = 0;
                $classe = array();
                foreach ($_POST as $key=>$value1){
                    $classeInfo = $modelClasse->selectById($key);
                    $promo = $modelPromotion->selectById($classeInfo['promotion_id'])['anneeDiplome'];
                    $departement = $modelDepartement->selectById($classeInfo['departement_id'])['libelle'];
                    $classe[$i] = array($departement,$promo);

                    $nbEtudiantClasse = $modelEtudiant->countByClasse($key)[0];

                    for ($j = 1; $j <= 6; ++$j) {
                        $results[$i][$j] = $modelEtudiant->countByClassePersonnalite($key, $j)[0];
                    }
                    foreach ($results[$i] as &$value2) {
                        $value2 = round(($value2 / $nbEtudiantClasse) * 100,0,PHP_ROUND_HALF_UP);
                    }
                    $i = $i +1;
                }
                $this->view->classe = $classe;
                $this->view->results = $results;
                $this->view->display();
            }else{
                header('Location: ./?query=classe');
            }
        }else{
            header('Location: ./?query=login/admin'); //Redirection page d'erreur
        }
    }
}