$(document).ready(function(){

    let timeFx = 800;
    let abierto = false;

    $('.list-plegable-container').hide();

    $('.opened ').next('.list-plegable-container').slideDown(0);

    $('.option-container').click(function(){
            $(this).next('.list-plegable-container').slideDown(timeFx).siblings('.list-plegable-container').slideUp(timeFx);
            abierto = true;
    });



        $('.list-selected').find('img').attr('src', $('.list-selected').find('img').attr('src').replace('.png', '') + '-dark.png');

//document.getElementByTagName


});