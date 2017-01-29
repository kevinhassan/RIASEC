$('#showButton').click(function(){
    if($('#exempleRiasec').css('display') == 'none'){
        $('#exempleRiasec').show();
        $(this+' i').removeClass('down').addClass('up');
    }else{
        $('#exempleRiasec').hide();
        $(this+' i').removeClass('up').addClass('down');
    }
});
$('#openModal').click(function(){
    $('.ui.modal')
        .modal('setting', 'closable', false)
        .modal('show');
});
$('#formAddPromo')
    .form({
        fields: {
            date: {
                identifier: 'date',
                rules: [
                    {
                        type   : 'empty',
                        prompt : 'Veuillez entrer une année de promotion'
                    }
                ]
            }
        }
    });

