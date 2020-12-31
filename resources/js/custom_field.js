jQuery(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: 'group_field/getField',
        type: 'POST',
        success: function(){
            return 1;
        }
    });
});
