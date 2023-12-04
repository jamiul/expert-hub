$(document).ready(function() {
    $(".at-title").click(function() {
        $(this).toggleClass("active").next(".at-tab").slideToggle().parent().siblings().find(
            ".at-tab").slideUp().prev().removeClass("active");
    });



    $(".carousel-inner .thumb").click(function() {
        if (!$(this).hasClass('active')) {
            $(".carousel-inner .thumb").removeClass("active");
            $(this).addClass("active");
        }
    });


});
