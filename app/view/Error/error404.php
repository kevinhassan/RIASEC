<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui text container">
        <img src="./assets/img/broken404.svg" width=100%>
    </div>
    <div class="ui vertical stripe segment">
        <div class="ui center aligned text container">
            <h1 class="ui huge horizontal header divider">
                <?php echo $this->title;?>
            </h1>
            <h3 class="ui big red header">BROKEN</h3>
            <p>
                La page que vous cherchez à joindre est indisponible ou elle peut n'avoir jamais existée.
                </br>Pour retourner à l'accueil veuillez cliquer sur le bouton ci-dessous.
            </p>
            <a class="ui green huge labeled icon button" href="./">
                <i class="home icon"></i>
                Accueil
            </a>
            <div class="ui warning icon message">
               <i class="info icon"></i> Si le problème persiste n'hésitez pas à contacter le responsable du site.
            </div>
        </div>
    </div>
</div>

<?php include(ROOT."/app/view/footer.php"); ?>

