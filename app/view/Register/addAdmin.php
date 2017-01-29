<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>


<div class="ui main text container">
    <div class="ui hidden divider"></div>
</div>
<div class="ui main text container">
    <div class="ui vertical stripe segment">
        <div class="ui center aligned text container">
            <h1 class="ui huge horizontal header divider">
                Administrateur <?php echo ' '.strtolower($this->title);?> !
            </h1>
            <p>
                Vous pouvez encore ajouter un administrateur où revenir à l'accueil
            </p>
            <div class="ui buttons">
                <a class="ui inverted blue huge left labeled icon button" href="./?query=register/admin"><i class="save icon"></i>Enregistrer</a>
                <a class="ui inverted green huge right labeled icon button" href="./?query=dashboard/admin"><i class="dashboard icon"></i>Dashboard</a>
            </div>
        </div>
    </div>
</div>
<div class="ui main text container">
    <div class="ui hidden divider"></div>
</div>
<?php include(ROOT."/app/view/footer.php"); ?>

