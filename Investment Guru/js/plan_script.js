$(document).ready(function () {    
    $("#mode").hide();
    $("#summary").hide();
    $("#details").hide();
    $("#btn_back").hide();
    $("#btn_calculate").hide();
    $("#btn_add").hide();
    $(".content-period").hide();
    $(".content-savings").show();
    $(".tab_goal").addClass("active");
    $("#para_period").css('color', '#e74c3c');
    $(".cal-savings").addClass("color-change"); 

    $("#btn_next").click(function() {
        if($("#goal").is(":visible")) {
            $("#goal").hide();
            $("#mode").show();
            $(".tab_goal").removeClass("active");
            $(".tab_mode").addClass("active");
            $("#btn_back").show();
        }
        else if($("#mode").is(":visible")) {
            $("#mode").hide();
            $("#details").show();
            $(".tab_mode").removeClass("active");
            $(".tab_details").addClass("active");
            $("#btn_next").hide();
            $("#btn_calculate").show();
        }  
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
            $("#mode").show();
            $(".tab_details").removeClass("active");
            $(".tab_mode").addClass("active");
            $("#btn_next").show();
            $("#btn_calculate").hide();
        } 
        else  {
            $("#mode").hide();
            $("#goal").show();
            $(".tab_mode").removeClass("active");
            $(".tab_goal").addClass("active");
            $("#btn_back").hide();     
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

    $('#chk_period').change(function() {
        $(".content-period").show();
        $(".content-savings").hide();    
        $(".cal-period").addClass("color-change"); 
        $(".cal-savings").removeClass("color-change"); 
    });

    $('#chk_savings').change(function() {
        $(".content-period").hide();
        $(".content-savings").show();    
        $(".cal-period").removeClass("color-change"); 
        $(".cal-savings").addClass("color-change"); 
    });

    function calculate() {
        var goalcost = parseInt($("input[name=txt_goalcost]").val());
        var savings = parseInt($("input[name=txt_savings]").val());
        var period = parseInt($("input[name=txt_period]").val());
        var type = $("select[name=sel_savingType]").val();
        var mode = $("input[name=chk_mode]:checked").val();
               
        if(mode == "Period") {    
            switch(type) {
                case "Monthly" : value = savings;
                                 break;
                case "Quaterly" : value = savings/3;
                                 break;        
                case "Half yearly" : value = savings/6;
                                 break;
                case "Yearly" : value = savings/12;
                                 break;
            }       
            period = goalcost/value;           
        }
        else {
            switch(type) {
                case "Monthly" : value = period;
                                 break;
                case "Quaterly" : value = period/3;
                                 break;        
                case "Half yearly" : value = period/6;
                                 break;
                case "Yearly" : value = period/12;
                                 break;
            }   
            savings = goalcost/value;           
        }

        $("input[name=result_goalname]").val($("input[name=txt_goalname]").val());
        $("input[name=result_goalcost]").val(goalcost);
        $("input[name=result_goalpriority]").val($("select[name=sel_goalpriority]").val());
        $("input[name=result_savingType]").val(type);
        $("input[name=result_savings]").val(savings);
        $("input[name=result_period]").val(period);
    }
});