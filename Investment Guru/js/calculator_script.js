$(document).ready(function () {    
    $("#plan").hide();
    $("#result").hide();
    $("#details").hide();
    $("#btn_back").hide();
    $("#btn_finish").hide();
    $(".content-period").hide();
    $(".content-amount").hide();
    $(".tab_goal").addClass("active");
    $("#para_period").css('color', '#e74c3c');
});

$("#btn_next").click(function() {

    if($("#goal").is(":visible")) {
        $("#goal").hide();
        $("#plan").show();
        $(".tab_goal").removeClass("active");
        $(".tab_plan").addClass("active");
        $("#btn_back").show();
    }
    else if($("#plan").is(":visible")) {
        $("#plan").hide();
        $("#details").show();
        $(".tab_plan").removeClass("active");
        $(".tab_details").addClass("active");
    }  
    else  {
        $("#details").hide();
        $("#result").show();
        $(".tab_details").removeClass("active");
        $(".tab_result").addClass("active");
        $("#btn_next").hide();
        $("#btn_finish").show();
    }  
});

$("#btn_back").click(function() {
    if($("#result").is(":visible")) {
        $("#result").hide();
        $("#details").show();
        $(".tab_result").removeClass("active");
        $(".tab_details").addClass("active");
        $("#btn_next").show();
        $("#btn_finish").hide();
    }
    else if($("#details").is(":visible")) {
        $("#details").hide();
        $("#plan").show();
        $(".tab_details").removeClass("active");
        $(".tab_plan").addClass("active");
    } 
    else  {
        $("#plan").hide();
        $("#goal").show();
        $(".tab_plan").removeClass("active");
        $(".tab_goal").addClass("active");
        $("#btn_back").hide();
    } 
});

$('#chk_period').change(function() {
    $(".content-period").toggle();     
});

$('#chk_amount').change(function() {
    $(".content-amount").toggle();     
});
