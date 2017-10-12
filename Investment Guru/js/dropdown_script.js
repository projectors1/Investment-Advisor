$(document).ready(function () {
    $(document.body).on('click','.dropdown-menu li', function( event ) {
        var $target = $(event.currentTarget);   
        $target.closest('.btn-group').find('[data-bind="label"]' ).text($target.text()).end().children('.dropdown-toggle').dropdown('toggle');  
        $("#dropdown-data").val($('.dropdown-toggle span:visible').text()); 
        return false; 
    });
});   