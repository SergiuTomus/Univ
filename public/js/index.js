
$(document).scroll(function () {
    var x=$(this).scrollTop();
    if(x>5){
        $("#sticky").addClass('navbar-sticky');

    } else {
        $("#sticky").removeClass('navbar-sticky');
    }
});


$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});




$("document").ready(function(){
    $('#facebook_footer').mouseenter(function(){
        $(this).attr('src','resources/facebook-hover.png');
    });
    $('#facebook_footer').mouseleave(function(){
        $(this).attr('src','resources/facebook-logo-button.png');
    });
});
$("document").ready(function(){
    $('#instagram_footer').mouseenter(function(){
        $(this).attr('src','resources/instagram-hover.png');
    });
    $('#instagram_footer').mouseleave(function(){
        $(this).attr('src','resources/instagram-logo.png');
    });
});
$("document").ready(function(){
    $('#twitter_footer').mouseenter(function(){
        $(this).attr('src','resources/twitter-hover.png');
    });
    $('#twitter_footer').mouseleave(function(){
        $(this).attr('src','resources/twitter-logo-button.png');
    });
});


$(document).ready(function(){
    $(".flip").flip({
        trigger: 'hover',
        axis: 'x'
    });
});


$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:false,
        navigationText:["",""],
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"fade",
        autoPlay:true
    });
});
