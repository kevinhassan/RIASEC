$( document ).ready(function() {
    $('table').tablesort();
});
$('#selectAllButton').click(function(){
    if($('input:checkbox').length > 0) {
        $(this).addClass('disabled');
        $('#deselectAllButton').removeClass('disabled');
        $('.checkbox input[type="checkbox"]').prop('checked',true);
        $('#supprButton').removeClass('disabled');
        if($(this).length == 2 ){
            $('#compareButton').removeClass('disabled');
        }else{
            $('#compareButton').addClass('disabled');
        }
    }
});
$('#deselectAllButton').click(function(){
    if($('input:checkbox').length > 0) {
        $(this).addClass('disabled');
        $('#selectAllButton').removeClass('disabled');
        $('.checkbox input[type="checkbox"]').prop('checked', false);
        $('#supprButton').addClass('disabled');
    }
});

$('input[type="checkbox"]').click(function(){
    if($('input:checkbox:checked').length > 0){
        $('#supprButton').removeClass('disabled');
        if($('input:checkbox:checked').length == 2){
            $('#compareButton').removeClass('disabled');
        }else{
            $('#compareButton').addClass('disabled');
        }
    }
    else{
        $('#supprButton').addClass('disabled');
        $('#compareButton').addClass('disabled');
    }
});
