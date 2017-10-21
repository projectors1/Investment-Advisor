$(document).ready(function () {    
    $("#result").hide();
    $("#btn_back").hide();
    $("#btn_calculate").show();
    $("#btn_add").hide();
    $(".tab_goal").addClass("active");

    $("#btn_back").click(function() {
        $("#result").hide();
        $("#goal").show();
        $(".tab_result").removeClass("active");
        $(".tab_goal").addClass("active");
        $("#btn_back").hide(); 
        $("#btn_add").hide();
        $("#btn_calculate").show();
    });

    $("#btn_calculate").click(function() {
        $("#result").show();
        $("#goal").hide();
        $(".tab_result").addClass("active");;
        $(".tab_goal").removeClass("active");
        $("#btn_back").show(); 
        $("#btn_add").show();
        $("#btn_calculate").hide();
        calculate();
    });

    $(document.body).on('click','.dropdown-priority li', function( event ) {
        var $target = $(event.currentTarget);   
        $target.closest('.btn-group').find('[data-bind="labelpriority"]' ).text($target.text()).end().children('.dropdown-toggle').dropdown('toggle');  
        $("#dropdown-priority").val($('#toggle-priority span:visible').text()); 
        return false; 
    });

    $(document.body).on('click','.dropdown-type li', function( event ) {
        var $target = $(event.currentTarget);   
        $target.closest('.btn-group').find('[data-bind="labeltype"]' ).text($target.text()).end().children('.dropdown-toggle').dropdown('toggle');  
        $("#dropdown-type").val($('#toggle-type span:visible').text()); 
        return false; 
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
        $("input[name=result_goalpriority]").val($("input[name=sel_goalpriority]").val());
        $("input[name=result_savingType]").val(type);
        $("input[name=result_amount]").val(amount.toFixed(2));
        $("input[name=result_period]").val(period);
    }
});