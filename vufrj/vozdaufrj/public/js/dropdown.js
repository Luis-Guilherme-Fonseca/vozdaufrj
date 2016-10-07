var dropNav = $(".dropdownNav");

$(window).scroll(function() {
    if( $(this).scrollTop() > 100){
        dropNav.addClass("scrollednav");
        dropNav.removeClass("dropdownNav");
    }else{
        dropNav.removeClass("scrollednav");
        dropNav.addClass("dropdownNav");
    }
});

$('.curso').height($('.curso').width());