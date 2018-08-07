$(document).ready(function() {
    $('.toolbar').click(function() {
        $('.mini-window').removeClass('slideInLeft');
        $('.mini-window').css('visibility', 'hidden');
        $('.minimized').css('visibility', 'visible');
    });
    $('.minimized').on('click', function() {
        $('.mini-window').css('visibility', 'visible');
        $('.minimized').css('visibility', 'hidden');
    });


});