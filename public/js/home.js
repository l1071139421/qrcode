require(['./require.config'], function() {
    require(['jquery'], function($) {"use strict";
        console.log($);

        $('.CI').on('click', function() {
            alert($('meta[name="csrf-token"]').attr('content'));
            $.ajax({
                method: 'POST',
                url: 'item/create',
                data: {
                    '_token': $('meta[name="csrf-token"]').attr('content'),
                    'name': '電錶'
                },
                success: function(xhr) {
                    console.log(xhr);
                },
                error: function (xhr) {
                    alert(xhr.responseJSON);
                }
            });
        });
        
    });
});