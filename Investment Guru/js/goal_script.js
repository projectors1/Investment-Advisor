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
                $("#savingtype").html(data.Savingtype);
                $("input[name=txt_period]").val(data.Period);
                $("input[name=txt_amount]").val(data.Amount);
                $('#btn_update').attr("onclick","update_goal("+goalId+","+data.Name+","+data.Cost+","+data.Savingtype+","+data.Period+","+data.Amount+")");
            } 
        });
    });
});

function delete_goal(id)
{
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

function update_goal(id,name,cost,type,period,amount)
{
    var card = $("#goal"+id);
    $.ajax({
        type: 'POST',
        url: '../includes/goal_inc.php',
        data: {
            update_goal:'update_goal',
            goal_id:id,
            goal_name:name,
            goal_cost:cost,
            goal_type:type,
            goal_period:period,
            goal_amount:amount,
        },
        cache: false,
        success:function(result){
            
        }
    });
}