$(window).scroll(function(){
    if ($(window).scrollTop() >= 100) {
        $('nav').addClass('navbar-sticky');
    }
    else {
        $('nav').removeClass('navbar-sticky');
    }
});