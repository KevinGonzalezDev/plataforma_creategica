$(document).ready(function(){

    $('.grid-block').hover(function(){
        $(this).addClass('grid-block-selected');

        let actualimg = $(this).find('.change-icon').attr('src');


        $(this).find('.change-icon').attr('src', actualimg.replace('-dark.png', '') + '.png');



    },
        function(){
            $(this).removeClass('grid-block-selected');

            let actualimg = $(this).find('.change-icon').attr('src');

            $(this).find('.change-icon').attr('src', actualimg.replace('.png', '') + '-dark.png');

        }

    );

});