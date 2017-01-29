<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui hidden divider"></div>
</div>
<div class="ui main text container">
    <div class="ui vertical stripe segment">
        <div class="ui center aligned text container">
            <h1 class="ui huge horizontal header divider">
                Etudiant  <?php echo ' '.strtolower($this->title);?> !
            </h1>
            <p>
                Vous pouvez maintenant remplir le questionnaire.
            </p>
            <p>
                Vous devrez tout d'abord vous connecter avec le bouton ci-dessous.
            </p>
            <a class="ui blue huge right labeled icon button" href="./?query=login/etudiant"><i class="sign in icon"></i>Connexion</a>
        </div>
    </div>
</div>
<div class="ui main text container">
    <div class="ui hidden divider"></div>
</div>
<?php include(ROOT."/app/view/footer.php"); ?>

