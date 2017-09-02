$(document).ready(function () {    
    $("#plan").hide();
    $("#result").hide();
    $("#btn_back").hide();
    $("#btn_finish").hide();
    $(".tab_goal").addClass("active");
});

$("#btn_next").click(function() {

    if($("#goal").is(":visible"))
    {
        $("#goal").hide();
        $("#plan").show();
        $(".tab_goal").removeClass("active");
        $(".tab_plan").addClass("active");
        $("#btn_back").show();
    }
    else 
    {
        $("#plan").hide();
        $("#result").show();
        $(".tab_plan").removeClass("active");
        $(".tab_result").addClass("active");
        $("#btn_next").hide();
        $("#btn_finish").show();
    }  
});

$("#btn_back").click(function() {
    if(!$("#plan").is(":visible"))
    {
        $("#result").hide();
        $("#plan").show();
        $(".tab_result").removeClass("active");
        $(".tab_plan").addClass("active");
        $("#btn_next").show();
        $("#btn_finish").hide();
    }
    else 
    {
        $("#plan").hide();
        $("#goal").show();
        $(".tab_plan").removeClass("active");
        $(".tab_goal").addClass("active");
        $("#btn_back").hide();
    } 
});