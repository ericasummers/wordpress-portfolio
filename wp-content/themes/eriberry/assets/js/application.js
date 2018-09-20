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

    if ($('.portfolio_example_slider').length) {
        $('.portfolio_example_slider').slick({
            arrows: false,
            focusOnSelect: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            slidesPerRow: 1,
            infinite: true
        });

        $('.slick-left-arrow').click(function() {
            $('.portfolio_example_slider').slick('slickPrev');
        });
        $('.slick-right-arrow').click(function() {
            $('.portfolio_example_slider').slick('slickNext');
        });
    }

    $('.title').click(function() {
        $('#category_dropdown').show();
    });
    $('#category_dropdown a').click(function(e) {
        $('.title').text($(this).text());
        $('.category_dropdown').hide();
        $(this).addClass('current');
        e.preventDefault();
    });

});