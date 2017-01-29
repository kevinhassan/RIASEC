function checkCode() {
    $('input[name="codeClasse"]')
        .api({
            url: 'http://'+document.location.hostname+'/?query=register/etudiant/checkCode/'+$('input[name="codeClasse"]').val(),
            onResponse: function(response) {
                if(response.success){
                    $('input[name="codeClasse"]').parent().removeClass("error");
                    $('input[name="codeClasse"] + i').removeClass("remove icon").addClass("checkmark icon");
                    $('button[type="submit"]').removeClass('disabled');
                    $('#errorMessageCodeClasse').hide();
                }
                else{
                    $('input[name="codeClasse"]').parent().addClass("ui error required field");
                    $('input[name="codeClasse"] + i').removeClass('lock icon').addClass('remove icon');
                    $('button[type="submit"]').addClass('disabled');
                    $('#errorMessageCodeClasse').show();
                }
            }
        });
}
function checkMailAdmin() {
    $('input[name="mail"]')
        .api({
            url: 'http://'+document.location.hostname+'/?query=register/admin/checkMail/'+$('input[name="mail"]').val(),
            onResponse: function(response) {
                if(!response.success){
                    $('input[name="mail"]').parent().removeClass("error");
                    $('input[name="mail"] + i').removeClass("remove icon").addClass("checkmark icon");
                    $('button[type="submit"]').removeClass('disabled');
                    $('#errorMessageMail').hide();
                }
                else{
                    $('input[name="mail"]').parent().addClass("ui error required field");
                    $('input[name="mail"] + i').removeClass('lock icon').addClass('remove icon');
                    $('button[type="submit"]').addClass('disabled');
                    $('#errorMessageMail').show();
                }
            }
        });
}
function checkMailEtudiant() {
    $('input[name="mail"]')
        .api({
            url: 'http://'+document.location.hostname+'/?query=register/etudiant/checkMail/'+$('input[name="mail"]').val(),
            onResponse: function(response) {
                if(!response.success){
                    $('input[name="mail"]').parent().removeClass("error");
                    $('input[name="mail"] + i').removeClass("remove icon").addClass("checkmark icon");
                    $('button[type="submit"]').removeClass('disabled');
                    $('#errorMessageMail').hide();
                }
                else{
                    $('input[name="mail"]').parent().addClass("ui error required field");
                    $('input[name="mail"] + i').removeClass('lock icon').addClass('remove icon');
                    $('button[type="submit"]').addClass('disabled');
                    $('#errorMessageMail').show();
                }
            }
        });
}
$('#formAddEtudiant')
    .form({
        fields: {
            prenom: {
                identifier: 'prenom',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un prénom'
                    }
                ]
            },
            nom: {
                identifier: 'nom',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un nom'
                    }
                ]
            },
            codeClasse: {
                identifier: 'codeClasse',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer le code fourni'
                    }
                ]
            },
            mail: {
                identifier: 'mail',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un e-mail'
                    },
                    {
                        type   : 'regExp',
                        value: /^[a-zA-Z]+\-?[a-zA-Z]+\.[a-zA-Z]+@etu\.umontpellier\.fr$/i,
                        prompt : 'Veuillez entrer une adresse du format prénom.nom@etu.umontpellier.fr'
                    }
                ]
            },
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
$('#formAddAdmin')
    .form({
        fields: {
            prenom: {
                identifier: 'prenom',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un prénom'
                    }
                ]
            },
            nom: {
                identifier: 'nom',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un nom'
                    }
                ]
            },
            mail: {
                identifier: 'mail',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer un e-mail'
                    },
                    {
                        type   : 'regExp',
                        value: /^[a-zA-Z]+\-?[a-zA-Z]+\.[a-zA-Z]+@umontpellier\.fr$/i,
                        prompt : 'Veuillez entrer une adresse du format prénom.nom@umontpellier.fr'
                    }
                ]
            }
        }
    });
