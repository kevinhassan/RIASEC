<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui text container">
        <h1 class="ui teal center aligned segment header">
            Enregistrement Administrateur
        </h1>
        <div class="ui hidden divider"></div>
        <form id="formAddAdmin" class="ui form" method="post" action="?query=register/admin/addAdmin">
            <div class="two fields">
                <div class="required field">
                    <label>Prénom </label>
                    <div class="ui icon input">
                        <input type="text" name="prenom" placeholder="Prénom" >
                        <i class="info icon"></i>
                    </div>
                </div>
                <div class="required field">
                    <label>Nom </label>
                    <div class="ui icon input">
                        <input type="text" name="nom" placeholder="Nom" >
                        <i class="info icon"></i>
                    </div>
                </div>
            </div>
            <div class="required field">
                <label>E-mail </label>
                <div class="ui icon input">
                    <input oninput="checkMailAdmin()" type="email" name="mail" placeholder="xxx.xxx@umontpellier.fr" >
                    <i class="mail icon"></i>
                </div>
            </div>
            <div class="ui negative message" id="errorMessageMail">
                <p>
                    Cet e-mail possède déjà un compte
                </p>
            </div>
            <div class="ui error message"></div>
            <div class="ui info message">
                Le mot de passe par défaut pour l'administrateur est 'admin'
            </div>
            <button class="ui fluid large teal right labeled icon submit button" type="submit" value="Valider"><i class="add user icon"></i>Valider</button>
        </form>
    </div>
</div>
<div class="ui main text container">
</div>
<script type="text/javascript" src="./assets/js/register.js"></script>
<?php include(ROOT."/app/view/footer.php"); ?>

