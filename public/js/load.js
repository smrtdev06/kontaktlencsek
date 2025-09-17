$(window).load(function() {
    // will first fade out the loading animation
    $(".loader").fadeOut();
    //then background color will fade out slowly
    $(".load-wrapper").delay(200).fadeOut("slow");
});