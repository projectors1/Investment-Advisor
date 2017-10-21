$(document).ready(function () {    
    $("#summary").hide();
    $("#details").hide();
    $("#btn_back").hide();
    $("#btn_calculate").hide();
    $("#btn_add").hide();
    $(".tab_goal").addClass("active");

    $("#btn_next").click(function() {
        $("#goal").hide();
        $("#details").show();
        $(".tab_goal").removeClass("active");
        $(".tab_details").addClass("active");
        $("#btn_next").hide();
         $("#btn_back").show();  
        $("#btn_calculate").show();       
    });

    $("#btn_back").click(function() {
        if($("#summary").is(":visible")) {
            $("#summary").hide();
            $("#details").show();
            $(".tab_summary").removeClass("active");
            $(".tab_details").addClass("active");
            $("#btn_calculate").show();
            $("#btn_add").hide();
        }
        else if($("#details").is(":visible")) {
            $("#details").hide();
            $("#goal").show();
            $(".tab_details").removeClass("active");
            $(".tab_goal").addClass("active");
            $("#btn_back").hide();  
            $("#btn_next").show();
            $("#btn_calculate").hide();
        }
    });

    $("#btn_calculate").click(function() {
        $("#details").hide();
        $("#summary").show();
        $(".tab_details").removeClass("active");
        $(".tab_summary").addClass("active");
        $("#btn_calculate").hide();
        $("#btn_add").show();
        calculate();
    });

    function calculate() {
        var value;
        var goalcost = parseFloat($("input[name=txt_goalcost]").val());
        var amount = parseFloat($("input[name=txt_amount]").val());
        var period = parseInt($("input[name=txt_period]").val());
        var type = $("input[name=sel_savingType]").val();
               
        switch(type) {
            case "Monthly" : value = period;
                                 break;      
            case "Half Yearly" : value = period/6;
                                 break;
            case "Yearly" : value = period/12;
                                 break;
        }   
        amount = parseInt(goalcost/value);           

        $("input[name=result_goalname]").val($("input[name=txt_goalname]").val());
        $("input[name=result_goalcost]").val(goalcost.toFixed(2));
        $("input[name=result_savingType]").val(type);
        $("input[name=result_amount]").val(amount.toFixed(2));
        $("input[name=result_period]").val(period);
    }
});