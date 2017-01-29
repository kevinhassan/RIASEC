<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>
<div class="ui main text container">
    <div class="ui center aligned grid">
        <div class="column">
            <h2 class="ui center aligned icon teal header">
                <i class="circular adminCustom icon"></i>
                Se connecter
            </h2>
            <form class="ui form attached fluid segment" method="post" action="?query=login/admin/connect">
                <div class="ui stacked">
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="text" name="mail" placeholder="Adresse e-mail">
                        </div>
                    </div>
                    <div class="field">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="mdp" placeholder="Mot de passe">
                        </div>
                    </div>
                    <div class="ui error message"></div>
                    <div class="ui fluid large teal submit right labeled icon button"><i class="send icon"></i>Se connecter</div>
                </div>
            </form>
            <div class="ui bottom attached info message">
                Vous voulez un compte ? <a href="#">Faire une demande</a>
            </div>
        </div>
    </div>
</div>
<script>
    $('.ui.form')
        .form({
            fields: {
                mail: {
                    identifier: 'mail',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Veuillez entrer une adresse e-mail'
                        },
                        {
                            type   : 'regExp',
                            value: /^[a-zA-Z]+\-?[a-zA-Z]+\.[a-zA-Z]+@umontpellier\.fr$/i,
                            prompt : 'Veuillez entrer une adresse au format prénom.nom@umontpellier.fr'
                        }
                    ]
                },
                mdp: {
                    identifier: 'mdp',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Veuillez entrer un mot de passe'
                        }
                    ]
                }
            }
        })
    ;

</script>
<?php include(ROOT."/app/view/footer.php"); ?>
