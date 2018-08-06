$(document).ready(function() {
    $('.toolbar svg').click(function(e) {
        e.preventDefault();
        $('.mini-window').css('display', 'none');
        $('.minimized').css('display', 'block');
    });
    $('.fa-window-minimize').on('click', function(e) {
        e.preventDefault();
        $('.mini-window').css('display', 'block');
        $('.minimized').css('display', 'none');
    });
});