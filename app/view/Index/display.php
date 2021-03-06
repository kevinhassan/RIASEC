<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui mashead">
    <div class="ui text container">
        <h1 class="ui huge header">
            Test d'orientation RIASEC
        </h1>
        <h2 class="ui large header">Quel métier choisir ?</h2>
        <blockquote>
            <h5 class="ui medium header">Découvrez le profil qui vous correspond le plus.</h5>
            <p><strong>N'attendez plus !</strong></p>
        </blockquote>
        <?php
            if(!isset($this->data['userData']) && !isset($this->data['questionnaireRealise'])){
                echo '<button class="ui huge primary right labeled icon button" id="openModal">Passer le test <i class="target icon"></i></button>';
            }
            else if(isset($this->data['userData']) && $this->data['userData']["role"] === 'etudiant' && !isset($this->data['questionnaireRealise'])){
                echo '<a class="ui huge primary right labeled icon button" href="?query=questionnaire">Passer le test <i class="target icon"></i></a>';
            }
            else if(isset($this->data['userData']) && $this->data['userData']["role"] === 'etudiant' && isset($this->data['questionnaireRealise'])){
                echo '<a class="ui huge primary right labeled icon button" href="?query=resultat">Résultat <i class="info icon"></i></a>';
            }
        ?>
    </div>
</div>
<div class="ui main text container">
    <div class="ui vertical stripe">
        <div class="ui text container">
            <h4 class="ui horizontal divider header">
                <a href="https://fr.wikipedia.org/wiki/Mod%C3%A8le_RIASEC" target="_blank" title="En savoir plus"><i class="wikipedia icon"></i>
                    C'est quoi le modèle RIASEC ?</a>
            </h4>
            <p>Le modèle RIASEC ou code Holland, mis au point par le psychologue John L. Holland, est une théorie sur les carrières et les choix vocationnels qui s'appuie sur les types psychologiques.</p>
            <p>Il identifie 6 types de personnalités en milieu professionnel qui sont à mettre en lien avec les intérêts professionnels.</p>
            <p>Chaque étudiant pourra consulter ses résultats et les comparer à ceux de ses camarades appartenant à même promotion.</p>
            <a class="ui fluid green right labeled icon button" id="showButton"><i class="down arrow icon"></i>Voir exemple</a>
            <img id="exempleRiasec" src="./assets/img/exempleRiasec.png"/>
        </div>
        <div class="ui divider"></div>
        <div class="ui text container">
            <h4 class="ui horizontal divider header">
                <i class="circle info icon"></i>
                Informations importantes
            </h4>
            <p>Polytech met à disposition de tous les étudiants de 4e année la possibilité de passer le test RIASEC.</p>
            <p>Vous ne pourrez passer le test qu'une seul fois et seulement si vous avez à votre possession le <strong>code pour votre classe</strong>.</p>
            <p>En effet, seul un professeur agrée ayant accès au site sera en mesure de vous fournir un code pour vous inscrire.</p>
          <a class="ui fluid blue large button" href="#">Contacter</a>
        </div>
    </div>
</div>

<div class="ui small modal">
    <h1 class="header">
        Passer le questionnaire
    </h1>
    <div class="image content">
        <div class="description">
            <h3 class="ui header">Informations</h3>
            <p>Il semble que vous voulez passer le questionnaire.</p>
            <p>Pour cela vous devez vous connecter</p>
        </div>
    </div>
    <div class="actions">
        <div class="ui red deny button">
            Non
        </div>
        <a class="ui positive green right labeled icon button" href="?query=login/etudiant">
            Se connecter
            <i class="sign in icon"></i>
        </a>
    </div>
</div>

<?php include(ROOT."/app/view/footer.php"); ?>

