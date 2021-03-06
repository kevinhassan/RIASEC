<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui text container">
        <h1 class="ui teal center aligned segment header">
            Ajouter une promotion
        </h1>
        <div class="ui hidden divider"></div>
        <form id="formAddPromo" class="ui form" method="post" action="?query=classe/add/promo">
            <div class="field">
                <div class="required field">
                    <label>Promotion</label>
                    <div class="ui calendar">
                        <div class="ui input left icon">
                            <i class="time icon"></i>
                            <input type="number" name="anneeDiplome" placeholder="Année de diplôme">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui error message"></div>
            <button class="ui fluid large teal right labeled icon submit button" type="submit" value="Valider"><i class="add icon"></i>Valider</button>
        </form>
    </div>
</div>

<div class="ui main text container">
    <div class="ui text container">
        <h1 class="ui teal center aligned segment header">
            Ajouter une classe
        </h1>
        <div class="ui hidden divider"></div>
        <form class="ui form" method="post" action="?query=classe/add/classe">
            <div class="two fields">
                <div class="required field">
                    <label>Départements</label>
                    <select class="ui dropdown" name="departement_id">
                        <?php
                            foreach ($this->departements as $departement){
                                echo '<option name="test" value="'.$departement["departement_id"].'">'.$departement["libelle"].'</option>';
                            }
                        ?>
                    </select>
                </div>
                <div class="required field">
                    <label>Promotions</label>
                    <select class="ui dropdown" name="promotion_id">
                        <?php
                            foreach ($this->promotions as $promotion){
                                echo '<option value="'.$promotion["promotion_id"].'">'.$promotion["anneeDiplome"].'</option>';
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="ui error message"></div>
            <button class="ui fluid large teal right labeled icon submit button" type="submit" value="Valider"><i class="add icon"></i>Valider</button>
        </form>
    </div>
</div>

<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
<script>
    $('.ui.calendar').calendar({
        type: 'year'
    });
</script>
<?php include(ROOT."/app/view/footer.php"); ?>

