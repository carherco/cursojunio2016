$(function(){
    $('#check-mysqli_f').click(function(){
        $('#codigo-mysqli_f').toggle();
        resize();
    });
    
    $('#check-mysqli_oo').click(function(){
        $('#codigo-mysqli_oo').toggle();
        resize();
    });
    
    $('#check-pdo').click(function(){
        $('#codigo-pdo').toggle();
        resize();
    });
    
    resize();
});

var resize = function(){
    var num = $('.checkbox:checked').length;
    switch(num) {
        case 1:
            $('.codigo').removeClass('col-md-4');
            $('.codigo').removeClass('col-md-6');
            $('.codigo').addClass('col-md-9');
            break;
        case 2:
            $('.codigo').removeClass('col-md-4');
            $('.codigo').removeClass('col-md-9');
            $('.codigo').addClass('col-md-6');
            break;
        case 3:
            $('.codigo').removeClass('col-md-6');
            $('.codigo').removeClass('col-md-9');
            $('.codigo').addClass('col-md-4');
            break;
        default:
            $('.codigo').removeClass('col-md-6');
            $('.codigo').removeClass('col-md-9');
            $('.codigo').addClass('col-md-4');
    }
};