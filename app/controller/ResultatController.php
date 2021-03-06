<?php
require_once(MODEL_PATH . "ModelEtudiant.php");
require_once(MODEL_PATH . "ModelProposition.php");
require_once(MODEL_PATH . "ModelPersonnalite.php");
require_once(MODEL_PATH . "ModelRepondre.php");

/**
 * Class ResultatController
 */
class ResultatController extends Controller
{
    /**
     * Récupérer les pourcentages de chaque profil dans la même classe que l'éléve
     */
    public function display()
    {
        if (estEtudiant()) {
            $token = decodeToken($_COOKIE["token"])["data"];
            $idEtudiant = $token["idUser"];
            $modelEtudiant = new ModelEtudiant();
            $etudiant = $modelEtudiant->selectById($idEtudiant);
            $modelPersonnalite = new ModelPersonnalite();
            $personnaliteDominante = $modelPersonnalite->selectById($etudiant["personnalite_id"]);

            $this->view->userData = $token;
            $this->view->questionnaireRealise = $etudiant["personnalite_id"];
            $this->view->personnaliteDominante = $personnaliteDominante;
            $this->view->display();
        }else{
            header('Location: ./?query=login/etudiant'); // redirection d'erreur
        }

    }

    /**
     * Fonction pour récupérer les données d'un utilisateur sur le graphique
     * Fonction d'api pour semantic-ui
     */
    public function showEtudiantResultat()
    {
        if (estEtudiant()) {
            $token = decodeToken($_COOKIE["token"])["data"];
            $idEtudiant = $token["idUser"];
            $modelProposition = new ModelProposition();
            $modelRepondre = new ModelRepondre();
            $results = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);
            $reponses = $modelRepondre->getAllChoix($idEtudiant);
            for ($i = 0; $i < 12; ++$i) {
                for ($j = 1; $j < 4; ++$j) {
                    $idReponse = $reponses[$i][$j];//Récupére les choix1,choix2,choix3
                    $idPersonnaliteReponse = $modelProposition->selectById($idReponse)["personnalite_id"];
                    $results[$idPersonnaliteReponse] += 3 - ($j - 1);
                }
            }
            foreach ($results as &$value) {
                $value = round(($value/ 72) * 100,0,PHP_ROUND_HALF_UP);
            }
            echo json_encode($results);
        }
    }

    /**
     * Afficher les résultats de la classe
     * Fonction d'api pour semantic-ui
     */
    public function showClasseResultat()
    {
        if (estEtudiant()) {
            $token = decodeToken($_COOKIE["token"])["data"];
            $idEtudiant = $token["idUser"];
            $modelEtudiant = new ModelEtudiant();
            $etudiant = $modelEtudiant->selectById($idEtudiant);
            $nbEtudiantClasse = $modelEtudiant->countByClasse($etudiant["classe_id"])[0];

            $results = array(1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0);
            //On calcule le nombre d'élève appartenant à la même classe mais d'une même personnalite
            for ($i = 1; $i <= 6; ++$i) {
                $results[$i] = $modelEtudiant->countByClassePersonnalite($etudiant["classe_id"], $i)[0];
            }
            foreach ($results as &$value) {
                $value = round(($value / $nbEtudiantClasse) * 100,0,PHP_ROUND_HALF_UP);
            }
            echo json_encode($results);
        }
    }
}
