function delete_row(id)
{
    var tr = $("#row"+id);
    $.ajax({
        type: 'POST',
        url: '../includes/goal_inc.php',
        data: {
            delete_row:'delete_row',
            row_id:id,
        },
        cache: false,
        success:function(result){
            tr.fadeOut(500, function(){
               $(this).remove();
            });
        }
    });
}