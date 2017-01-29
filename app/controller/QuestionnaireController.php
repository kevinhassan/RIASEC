<?php
require_once(MODEL_PATH . "ModelEtudiant.php");
require_once(MODEL_PATH . "ModelProposition.php");
require_once(MODEL_PATH . "ModelPersonnalite.php");
require_once(MODEL_PATH . "ModelRepondre.php");

/**
 * Class QuestionnaireController
 */
class QuestionnaireController extends Controller {

    /**
     * Afficher le questionnaire si on est étudiant connecté
     * Sinon rediriger vers la page de login
     */
    public function display()
    {
        if (estEtudiant()){
            $token = decodeToken($_COOKIE["token"])["data"];
            //On regarde qui est l'étudiant
            $idEtudiant = $token["idUser"];
            /**
             * On regarde si l'étudiant à déjà des reponses sur les groupes (cas où il a fait partiellement le questionnaire)
             * Dans ce cas on récupère l'id maximum du groupe dans la table Repondre
             * S'il en a pas on garde 1 comme id du Groupe
             * Si c'est 12 on recalcule le profil (dans le cas où il n'a pas encore de profil) et on redirige vers la page résultat
             */
            $modelRepondre = new ModelRepondre();
            $idGroupe = $modelRepondre->selectMaxGroupe($idEtudiant)[0];
            if($idGroupe==12){
                /**
                 * Recalculer le profil si l'étudiant n'a pas déjà de personnalité attribuée
                 * Sinon on l'envoie vers la page résultat
                 */
                header('Location: ./');
            }else{
                $idGroupe = $idGroupe +1; //car le idGroupe correspond au groupe dont on a déjà répondu si on a répondu à rien le groupe sera 1
            }
            $this->view->idGroupe = $idGroupe;
            $this->view->userData = $token;
            $Proposition = new ModelProposition();
            $this->view->propositions = $Proposition->selectByGroupe($idGroupe);
            $this->view->display();
        }
        else{
            header('Location: ./?query=login/etudiant');
        }
    }

    /**
     * Ajouter un résultat sur un groupe de question
     * Dès que l'étudiant connecté aura validé les propositions
     * Sinon rediriger vers la page de login
     */
    public function addResultat()
    {
        if (estEtudiant()) {
            $token = decodeToken($_COOKIE["token"])["data"];
            $idEtudiant = $token["idUser"];
            $idGroupe = $this->route["params"]["idQuestionnaire"];
            /**
             * On prépare les réponses sous le bon format pour le modèle
             */
            $reponses = array(
                $_POST["option1"],
                $_POST["option2"],
                $_POST["option3"]
            );

            $modelRepondre = new ModelRepondre();
            $modelRepondre->createReponse($idEtudiant,$idGroupe,$reponses);

            /**
             * Si l'id du groupe était 12 on passe à l'affectation du profil sur l'étudiant
             */
            if($idGroupe == 12){
                $modelProposition = new ModelProposition();
                $results = array(1=>0,2=>0,3=>0,4=>0,5=>0,6=>0);

                for ($i = 1; $i <= 12; ++$i) {
                    $reponses = $modelRepondre->selectByGroupeEtudiant($idEtudiant, $i)[0];
                    for ($j = 0; $j < 3; ++$j) {
                        $idReponse = $reponses[$j];//Récupére les choix1,choix2,choix3
                        $idPersonnaliteReponse = $modelProposition->selectById($idReponse)["personnalite_id"];
                        $results[$idPersonnaliteReponse] += 3-$j;
                    }
                }
                foreach ($results as &$value) {
                    $value = round(($value/ 72) * 100,0,PHP_ROUND_HALF_UP);
                }
                //Attribue l'id de la personnalite dominante
                $maPersonnalite = array_search(max($results), $results);
                $modelEtudiant = new ModelEtudiant();
                $modelEtudiant->editPersonnalite($idEtudiant,$maPersonnalite);
                $_COOKIE["resultat"] = $results;
                //On redirige vers la page resultat
                header('Location: ./?query=resultat');
            }
            header('Location: ./?query=questionnaire');//Rediriger vers le graphique
        }else{
            header('Location: ./?query=login/etudiant');
        }
    }

    /**
     * Editer un questionnaire si on est administrateur
     * Et ne valider les modifications seulement sur les propositions selectionnées
     * Sinon renvoyer vers la page de login admin si on est pas connecté
     */
    public function edit(){
        if (estAdmin()) {
            if(!isset($this->route["params"]["idGroupe"])){//Si on a pas de groupe a modifier passé en parametre on passe à l'affichage de l'édition
                $modelProposition = new ModelProposition();
                $propositions = array();
                for ($i=1;$i<=12;$i++){
                    $propositions[$i] = $modelProposition->selectByGroupe($i);
                }
                $this->view->propositions = $propositions;
                $token = decodeToken($_COOKIE["token"])["data"];
                $this->view->userData = $token;
                $this->view->display();
            }else{
                $modelProposition = new ModelProposition();
                foreach ($_POST as $key=>$value){
                    $modelProposition->editIntitule($value,$key);
                }
                header('Location: ./?query=questionnaire/edit');
            }
        }else{
            header('Location: ?query=login/admin');
        }
    }
}