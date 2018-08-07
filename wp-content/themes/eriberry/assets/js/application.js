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

    $('.mobile_menu_toggle').on('click', function(e) {
        e.preventDefault();
        $('.mobile_menu').toggleClass('hidden');
    });

});