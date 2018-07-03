
$(document).scroll(function () {
    var x=$(this).scrollTop();
    if(x>5){
        $("#sticky").addClass('navbar-sticky');
        $('#dropdown-sticky').addClass('dropdown-sticky');

    } else {
        $("#sticky").removeClass('navbar-sticky');
        $('#dropdown-sticky').removeClass('dropdown-sticky');
    }
});


$('ul.nav li.dropdown').hover(function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
    $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});
