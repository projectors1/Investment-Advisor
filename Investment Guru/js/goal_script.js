$(document).ready(function() {
    $('#modalDelete').on('show.bs.modal', function(e) {
        var goalId = $(e.relatedTarget).data('id');
        $("input[name=txt_deletegoalID]").val(goalId);
    });

    $('#modalEdit').on('show.bs.modal', function(e) {
        var goalId = $(e.relatedTarget).data('id');
        var goalcost = $("#goal"+goalId+" .cost").html();
        cost = Number($.trim(goalcost.replace("₹","")));
        $("input[name=txt_updategoalID]").val(goalId);
        $("input[name=txt_updategoalname]").val($.trim($("#goal"+goalId+" .name").html()));
        $("input[name=txt_updategoalcost]").val(cost);
        $("input[name=sel_updategoalpriority]").val($("#goal"+goalId+" .priority").html());
        $("#priority").html($("#goal"+goalId+" .priority").html());
    });

    $(document.body).on('click','.dropdown-priority li', function( event ) {
        var $target = $(event.currentTarget);   
        $target.closest('.btn-group').find('[data-bind="labelpriority"]' ).text($target.text()).end().children('.dropdown-toggle').dropdown('toggle');  
        $("#dropdown-priority").val($('#toggle-priority span:visible').text()); 
        return false; 
    });
});