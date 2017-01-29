<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui text container">
        <h1 class="ui teal center aligned segment header">
            Enregistrement Etudiant
        </h1>
        <div class="ui hidden divider"></div>
        <form id="formAddEtudiant" class="ui form" method="post" action="?query=register/etudiant/addEtudiant">
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
                <label>Code de classe </label>
                <div class="ui icon input">
                    <input oninput="checkCode()" type="text" name="codeClasse" placeholder="Code">
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="ui negative message" id="errorMessageCodeClasse">
                <p>
                    Le code fourni n'existe pas ...
                </p>
            </div>
            <div class="required field">
                <label>E-mail </label>
                <div class="ui icon input">
                    <input oninput="checkMailEtudiant()" type="email" name="mail" placeholder="xxx.xxx@etu.umontpellier.fr" >
                    <i class="mail icon"></i>
                </div>
            </div>
            <div class="ui negative message" id="errorMessageMail">
                <p>
                    Cet e-mail possède déjà un compte
                </p>
            </div>
            <div class="required field">
                <label>Mot de passe </label>
                <div class="ui icon input">
                    <input type="password" name="mdp" placeholder="Mot de passe" >
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="required field">
                <label>Confirmer mot de passe </label>
                <div class="ui icon input">
                    <input type="password" name="confirmMdp" placeholder="Confirmer mot de passe" >
                    <i class="lock icon"></i>
                </div>
            </div>
            <div class="ui error message"></div>
            <button class="ui fluid large teal right labeled icon submit button" type="submit" value="Valider"><i class="add user icon"></i>Valider</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="./assets/js/register.js"></script>
<?php include(ROOT."/app/view/footer.php"); ?>

