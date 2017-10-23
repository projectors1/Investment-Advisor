$(document).ready(function() {
    $('#modalDelete').on('show.bs.modal', function(e) {
        var goalId = $(e.relatedTarget).data('id');
        $('#btn_delete').attr("onclick","delete_goal("+goalId+")");
    });

    $('#modalEdit').on('show.bs.modal', function(e) {
        var goalId = $(e.relatedTarget).data('id');
        $.ajax({  
            type: 'POST',                                    
            url: '../includes/goal_inc.php',        
            data: {
                get_goal:'get_goal',
                goal_id: goalId,
            },
            cache: false,
            dataType: 'json',
            success: function(data)
            {
                $("input[name=txt_goalname]").val(data.Name);
                $("input[name=txt_goalcost]").val(data.Cost);
                $("#priority").html(data.Priority);
                $("#type").html(data.Savingtype);
                $("input[name=txt_period]").val(data.Period);
                $("input[name=txt_amount]").val(data.Amount);
                $('#btn_update').attr("onclick","update_goal("+goalId+")");
            } 
        });
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
});

function delete_goal(id) {
    var card = $("#goal"+id);
    $.ajax({
        type: 'POST',
        url: '../includes/goal_inc.php',
        data: {
            delete_goal:'delete_goal',
            goal_id:id,
        },
        cache: false,
        success:function(result){
            card.fadeOut(500, function(){
               $(this).remove();
            });
        }
    });
}

function update_goal(id) {
    var name = $("input[name=txt_goalname]").val();
    var cost = parseInt($("input[name=txt_goalcost]").val());
    var priority = $("#priority").html();
    var type = $("#type").html();
    var period = parseInt($("input[name=txt_period]").val());
    var amount = parseInt($("input[name=txt_amount]").val());

    $.ajax ({
        type: 'POST',
        url: '../includes/goal_inc.php',
        data: {
            update_goal:'update_goal',
            goal_id:id,
            goal_name:name,
            goal_cost:cost,
            goal_priority:priority,
            goal_type:type,
            goal_period:period,
            goal_amount:amount,
        },
        cache: false,
        success:function(result) {
            $("#goal"+id+" .name").html(name);
            $("#goal"+id+" .priority").html(priority);
            $("#goal"+id+" .type").html(type);
            $("#goal"+id+" .cost").html("₹ "+cost);
            $("#goal"+id+" .period").html(period+" months");
            $("#goal"+id+" .amount").html("₹ "+amount);
        }
    });
}
