/**
 * Si je clique sur une case à cochée j'efface toute celle qui sont sur la même ligne
 * Dans ce cas je récupère la case à cocher j'efface tous les boutons radios qui ont la même value
 * Et je coche l'élément passé en paramétre
 */
$('#questionnaireForm td :input').click(function(){
    var ligneInputs= $(this).parent().parent().parent().find("input");
    ligneInputs.prop('checked',false);//On supprime toutes les cases cochées sur la même ligne
    $(this).prop('checked',true); //On recoche la case initialement cochée
});

/**
 * Bloquer la validation du questionnaire
 * Empêcher qu'un formulaire ne parte avec aucune case cochée sur les 3 colonnes de bouton radio
 */
$('#questionnaireForm').submit(function(e){
    var option1 = $(this).find("input[name=option1]");//colonne 1
    var option2 = $(this).find("input[name=option2]");//colonne 2
    var option3 = $(this).find("input[name=option3]");//colonne 3

    var flag1 = false;//Si on trouve au moins une case cochée on arrête le parcours
    var flag2 = false;
    var flag3 = false;
    var i=0;
    while((!flag1 || !flag2 || !flag3) && i< option1.length){
        if(option1[i].checked && !flag1){//Si une case est cochée dans la colonne 1 on s'en occupe plus
            flag1 = true;
        }
        if(option2[i].checked && !flag2){
            flag2 = true;
        }
        if(option3[i].checked && !flag3){
            flag3 = true;
        }
        i++;
    }
    if(!(flag1 && flag2 && flag3)){
        //On affiche le message d'erreur du formulaire
        $('#errorMessageQuestionnaire').show();
    }else{
        $('#errorMessageQuestionnaire').hide();
    }
    return (flag1 && flag2 && flag3); //Si c'est faux alors on n'envoie pas le formulaire
});
