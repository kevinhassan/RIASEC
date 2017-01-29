<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <h1 class="ui center aligned teal segment header">Questionnaire RIASEC</h1>
    <div class="ui text container">
        <h3 class="ui header center aligned ">Groupe <?php echo $this->idGroupe?></h3>
        <form class="ui form" id="questionnaireForm" action=?query=questionnaire/addResultat/<?php echo $this->idGroupe;?> method="post">
            <table class="ui teal celled striped unstackable table">
                <thead> <!-- En-tête du tableau -->
                <tr>
                    <th></th>
                    <th class="center aligned">Choix 1</th>
                    <th class="center aligned">Choix 2</th>
                    <th class="center aligned">Choix 3</th>
                </tr>
                </thead>

                <tbody> <!-- Corps du tableau -->
                <?php
                foreach ($this->propositions as $proposition){
                    echo "<tr>";
                    echo "<td class=\"center aligned\">".$proposition['intitule']."</td>"; //intitule
                    echo '<td class="center aligned collapsing"><div class="ui fitted checkbox"><input type="radio" name="option1" value="'.$proposition['proposition_id'].'"/><label></label></div></td>';
                    echo '<td class="center aligned collapsing"><div class="ui fitted checkbox"><input type="radio" name="option2" value="'.$proposition['proposition_id'].'" /><label></label></div></td>';
                    echo '<td class="center aligned collapsing"><div class="ui fitted checkbox"><input type="radio" name="option3" value="'.$proposition['proposition_id'].'" /><label></label></div></td>';
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            <div class="ui error message" id="errorMessageQuestionnaire">Vous devez selectionner exactement 1 proposition par colonne </div>
            <div class="ui hidden divider"></div>
            <?php
            if($this->idGroupe == 12)
                echo '<button type="submit" class="ui green submit right labeled icon button right floated"><i class="send icon"></i>Valider</button>';
            else
                echo '<button type="submit" class="ui teal submit right labeled icon button right floated"><i class="right arrow icon"></i>Suivant</button>'
            ?>
        </form>
    </div>
</div>
<script type="text/javascript" src="assets/js/questionnaire.js"></script>
<?php include(ROOT."/app/view/footer.php"); ?>

