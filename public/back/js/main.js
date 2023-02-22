$(document).ready(function () {


    $('#navToggle').on('click', function () {

        $('.nav').toggleClass('open');

        $('#content').toggleClass('short');
        $('.btn-text-nav').toggleClass('d-none');

    });

    if ($('#nav').hasClass('.open')) {

        alert('help');
    } else {

    }



    /*
    $('.nav').addClass('open');

        if ($('.nav').hasClass('open')) {
            $(this).css('align-self', 'center');
            $('.nav .badge').css('align-self', 'center');

            $('.nav .badge').text('• ORDENES');
        }



    if ($('.nav').hasClass('.open')) {

        alert('no');
        $('#navToggle').on('click', function () {
            console.log('ayuda');
        });


    } else {

        $('#navToggle').on('click', function () {
            $('.nav').addClass('open');

            $(this).css('align-self', 'center');
            $('.nav .badge').css('align-self', 'center')
        });

        alert('ya');

    }
    */

});
