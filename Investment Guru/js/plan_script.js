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
        var amount = 0,period = 0;
        var cost = parseInt($("input[name=txt_goalcost]").val());    
        var type = $("input[name=sel_savingType]").val();
        var priority = $("input[name=sel_goalpriority]").val();
        
        $.ajax({
            type: 'POST',
            url: '../includes/plan_inc.php',
            data: {
                calculate_goal:'calculate_goal',
                goal_priority:priority,
            },
            cache: false,
            dataType: 'json',
            success: function(data) {
                amount = parseInt(data);
                period = Math.round(cost / amount);
 
                $("input[name=result_amount]").val(amount);
                $("input[name=result_period]").val(period+" months");
            }
        });      

        $("input[name=result_goalname]").val($("input[name=txt_goalname]").val());
        $("input[name=result_goalcost]").val(cost);
        $("input[name=result_goalpriority]").val($("input[name=sel_goalpriority]").val());
        $("input[name=result_savingType]").val(type);
    }
});