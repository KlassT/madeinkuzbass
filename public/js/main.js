$(function() {

    $('.toggle-menu').on('click', function() {
        $(this).toggleClass('active');
        if($(this).hasClass('active')) {
            $('header nav').show();
            $('body').addClass('no-scroll');
        }
        else {
            $('header nav').hide();
            $('body').removeClass('no-scroll');
        }
    });

    $(window).scroll(function() {
        if($(document).scrollTop() > 25) {
            $('header').addClass('fixed');
        }
        else {
            $('header').removeClass('fixed');
        }
    });

    $('.channel-link').on('click', function() {
        $('body').addClass('no-scroll');
        $('.channel').fadeIn('slow');
        return false;
    });

    $('.channel [class*=close]').on('click', function() {
        $('body').removeClass('no-scroll');
        $('.channel').fadeOut('slow');
        return false;
    });

    $('.scroll-link').on('click', function () {
        location.hash = $(this).attr('href').split('#')[1];
        checkHash();
        return false;
    });

    function checkHash()
    {
        console.log(location.hash);
        if(location.hash != '') {
            var blockTop = $('.' + location.hash.split('#')[1]).offset().top;
            console.log(blockTop);
            $('html, body').animate({'scrollTop' : blockTop}, 'slow');
        }
    }

    checkHash();

});