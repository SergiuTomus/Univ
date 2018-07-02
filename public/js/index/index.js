$("document").ready(function(){
    $('#facebook_footer').mouseenter(function(){
        $(this).attr('src','resources/index/facebook-hover.png');
    });
    $('#facebook_footer').mouseleave(function(){
        $(this).attr('src','resources/index/facebook-logo-button.png');
    });
});
$("document").ready(function(){
    $('#instagram_footer').mouseenter(function(){
        $(this).attr('src','resources/index/instagram-hover.png');
    });
    $('#instagram_footer').mouseleave(function(){
        $(this).attr('src','resources/index/instagram-logo.png');
    });
});
$("document").ready(function(){
    $('#twitter_footer').mouseenter(function(){
        $(this).attr('src','resources/index/twitter-hover.png');
    });
    $('#twitter_footer').mouseleave(function(){
        $(this).attr('src','resources/index/twitter-logo-button.png');
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
