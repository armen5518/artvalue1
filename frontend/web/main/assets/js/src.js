$(document).ready(function(){

    // hide #back-top first
    $("#back-top").hide();

    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        // scroll body to 0px on click
        $('#back-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 800);
            return false;
        });


    });
    
    //cookie login
    
    if(getCookie('login') == 'true'){
        $('#login-popup').fadeIn(500);
    }else {
        $('#login-popup').fadeOut();
    }
    if(getCookie('signin') == 'true'){
        $('#signin-popup').fadeIn(500);
    }else {
        $('#signin-popup').fadeOut();
    }
    

    $('.log-in').click(function () {
        //$('#login-popup').show();
        $('#login-popup').fadeIn(500);
        document.cookie = "login=true";
    });

    $('#login-popup-close').click(function () {
        //$('#login-popup').hide();
        $('#login-popup').fadeOut(500);
        document.cookie = "login=false";
    });

    $('.sign-in').click(function () {
        //$('#signin-popup').show();
        $('#signin-popup').fadeIn(500);
        document.cookie = "signin=true";
    });

    $('#signin-popup-close').click(function () {
        //$('#signin-popup').hide();
        $('#signin-popup').fadeOut(500);
        document.cookie = "signin=false";
    });

    $('#sign_up').click(function () {

        $('#login-popup').fadeOut(500,function () {
            $('#signin-popup').fadeIn(500);
        });

    })
});

function getCookie(name) {
    var matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}