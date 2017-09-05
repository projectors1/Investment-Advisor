$(document).ready(function () {
    $('#btn_sidebar').click(function() {
        $('.sidebar-section').toggleClass('nav-view');
        $('.main-section').fadeTo( "fast",$('.main-section').css("opacity") == "1" ? "0.2" : "1");
    });
});