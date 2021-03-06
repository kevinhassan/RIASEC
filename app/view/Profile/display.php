<?php include(ROOT."/app/view/head.php"); ?>
<?php include(ROOT."/app/view/navbar.php"); ?>

<div class="ui main text container">
    <div class="ui text container">
        <h1 class="ui teal center aligned segment header">
            Profil utilisateur
        </h1>
        <div class="ui hidden divider"></div>
            <div class="ui centered card">
                <div class="image">
                    <?php
                    if($this->userData['role'] === 'etudiant'){
                        echo '<img src="./assets/img/student.svg">';
                    }else{
                        echo '<img src="./assets/img/admin.svg">';
                    }
                    ?>


                </div>
                <div class="center aligned content">
                    <a class="header"><?php echo $this->user['prenom'].' '.$this->user['nom'];?></a>
                    <?php
                        if($this->userData['role'] === 'etudiant'){
                            echo '<div class="meta"><span class="date">Année Diplôme : '.$this->user['promotion'].'</span></div>';
                        }
                    ?>
                <div class="description">
                    <?php echo $this->user['mail'];?>
                </div>
                <div class="description">
                    <?php
                    if($this->userData['role'] === 'etudiant'){
                        echo '<span>'.$this->user['departement'].'</span>';
                    }
                    ?>

                </div>
                <form id="profileForm" class="ui form" method="post" action="?query=profile/editmdp">
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
                    <button class="ui teal button" id="showMdp" type="button">Changer Mot de passe </button>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="ui main text container">

</div>

<style>
    .required.field{
        display: none;
    }
</style>
<script>
    $('#showMdp').click(function(){
        $('.required.field').css('display','block');
        $( this ).replaceWith( '<button class="ui icon green button" type="submit"><i class="send icon"></i>Valider</button>');
    });
    $('#profileForm')
        .form({
            fields: {
                mdp: {
                    identifier: 'mdp',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Veuillez entrer un mot de passe'
                        },
                        {
                            type   : 'minLength[6]',
                            prompt : 'Votre mot de passe doit comporter 6 caractères au minimum'
                        }
                    ]
                },
                confirmMdp: {
                    identifier: 'confirmMdp',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Veuillez confirmer votre mot de passe'
                        },
                        {
                            type: 'match[mdp]',
                            prompt: 'Les mots de passe ne correspondent pas'
                        }
                    ]
                }
            }
        });
</script>

<?php include(ROOT."/app/view/footer.php"); ?>
