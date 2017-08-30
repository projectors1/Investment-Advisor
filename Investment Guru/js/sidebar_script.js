$(document).ready(function () {
    $('#btn_sidebar').click(function() {
        $('.sidebar-section').animate({width: 'toggle'});
        $('.main-section').fadeTo( "fast",$('.main-section').css("opacity") == "1" ? "0.8" : "1");
    });
});