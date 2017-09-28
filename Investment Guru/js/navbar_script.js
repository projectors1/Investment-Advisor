$(document).ready(function () {
    var navbar = $('.navbar');
    $(window).scroll(function() {
        if ($(window).scrollTop() <= 20) {
            navbar.css('box-shadow', 'none');
        } else {
            navbar.css('box-shadow', '0px 4px 10px rgba(0, 0, 0, 0.26)');
        }
    });
});