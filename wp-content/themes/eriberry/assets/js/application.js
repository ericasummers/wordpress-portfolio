$(document).ready(function() {
    $('.toolbar').click(function() {
        $('.mini-window').removeClass('slideInLeft');
        $('.mini-window').addClass('slideInDown');
        $('.mini-window').css('display', 'none');
        $('.minimized').css('display', 'block');
    });
    $('.minimized').on('click', function() {
        $('.mini-window').css('display', 'block');
        $('.minimized').css('display', 'none');
    });
});