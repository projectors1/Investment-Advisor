$("a[href='#top']").click(function() {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
});

$("#btn_started").click(function() {
    $("html, body").animate({ scrollTop: $('#form-section').offset().top }, "slow");
    return false;
});