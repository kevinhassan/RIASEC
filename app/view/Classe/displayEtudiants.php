<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <h1 class="ui teal icon center aligned header">
        <i class="list icon"></i>
        <div class="content">
            Liste des élèves
        </div>
    </h1>
    <form method="post" action="./?query=etudiant/remove">
        <table class="ui sortable unstackable table">
            <div class="ui category search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Rechercher ...">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <thead>
            <tr>
                <th></th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Mail</th>
                <th></th>
            </tr></thead>
            <tbody>
            <?php
            foreach ($this->etudiants as $etudiant){
                echo '<tr><td class="collapsing"><div class="ui fitted slider checkbox"><input type="checkbox" name="'.$etudiant["etudiant_id"].'"><label></label></div></td>';
                echo '<td>'.$etudiant["prenom"].'</td><td>'.$etudiant["nom"].'</td><td>'.$etudiant["mail"].'
                <td><a class="ui right floated tiny yellow labeled icon button" href="./?query=etudiant/reset/'.$etudiant["etudiant_id"].'">
                <i class="edit icon"></i>Reset MDP</a></td></tr>';
            }
            ?>
            </tbody>
            <tfoot class="full-width">
            <tr>
                <th></th>
                <th colspan="6">
                    <button class="ui right floated tiny red labeled icon disabled button" type="submit" id="supprButton">
                        <i class="trash icon"></i> Supprimer
                    </button>
                    <div class="ui tiny button" id="selectAllButton">
                        Tous selectionner
                    </div>
                    <div class="ui tiny disabled button" id="deselectAllButton">
                        Tous deselectionner
                    </div>
                </th>
            </tr>
        </table>
    </form>
</div>

<script type="text/javascript" src="assets/js/tablesort.js"></script>
<script type="text/javascript" src="assets/js/tableau.js"></script>

<?php include(ROOT."/app/view/footer.php"); ?>
