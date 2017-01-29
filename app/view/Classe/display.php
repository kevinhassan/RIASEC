<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <h1 class="ui teal icon center aligned header">
        <i class="list icon"></i>
        <div class="content">
            Liste des classes
        </div>
    </h1>
    <form method="post" action="./?query=classe/remove">
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
                <th>Département</th>
                <th>Année de Diplôme</th>
                <th>Code</th>
            </tr></thead>
            <tbody>
            <?php
                foreach ($this->classes as $classe){
                    echo '<tr><td class="collapsing"><div class="ui fitted slider checkbox"><input type="checkbox" name="'.$classe["classe_id"].'"><label></label></div></td>';
                    echo '<td><a href="./?query=classe/'.$classe["classe_id"].'/list">'.$classe["departement"].'</td><td >'.$classe["anneeDiplome"].'</td><td>'.$classe["code"].'</td></tr>';
                }
            ?>
            </tbody>
            <tfoot class="full-width">
            <tr>
                <th colspan="6">
                    <button class="ui right floated tiny red labeled icon disabled button" type="submit" id="supprButton">
                        <i class="trash icon"></i> Supprimer
                    </button>
                    <button class="ui right floated tiny labeled icon blue button disabled" id="compareButton" type="submit">
                        <i class="info icon"></i> Comparer
                    </button>
                    <a class="ui right floated tiny green labeled icon button" href="./?query=classe/add">
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

<script>
    $('form').submit(function(event){
        //Si je clique sur le button comparer on remplacer le lien de form action
        if($('#compareButton').click()) {
            console.log($(this).attr('action','./?query=classe/stats'));
        }
        return $('input:checkbox:checked').length > 0;
    });
</script>
<?php include(ROOT."/app/view/footer.php"); ?>
