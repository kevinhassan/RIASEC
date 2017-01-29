<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

    <div class="ui main text container">
        <h1 class="ui teal icon center aligned header">
            <i class="user icon"></i>
            <div class="content">
                Gérer les administrateurs
            </div>
        </h1>

        <form method="post" action="./?query=dashboard/admin/remove">
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
                    foreach ($this->listAdmin as $admin){
                        echo '<tr><td class="collapsing"><div class="ui fitted slider checkbox"><input type="checkbox" name="'.$admin["admin_id"].'"><label></label></div></td>';
                        echo '<td>'.$admin["prenom"].'</td><td>'.$admin["nom"].'</td><td>'.$admin["mail"].'</td>
                        <td>
                            <a class="ui right floated tiny yellow labeled icon button" href="./?query=dashboard/admin/reset/'.$admin["admin_id"].'">
                            <i class="edit icon"></i>Reset MDP</a>
                        </td></tr>';
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
                        <a class="ui right floated tiny green labeled icon button" href="./?query=register/admin">
                            <i class="add user icon"></i> Ajouter
                        </a>
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
