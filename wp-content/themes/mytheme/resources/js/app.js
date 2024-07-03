jQuery(document).ready(function($) {
    $(document).on('added_to_wishlist removed_from_wishlist', function() {
        $.ajax({
            url: ajax_object.ajax_url,
            method: 'POST',
            data: {
                action: 'update_wishlist_count'
            },
            success: function(response) {
                if (response.success) {
                    if (response.data.count > 0) {
                        $('.heart-icon .wishlist-count').text(response.data.count).show();
                    } else {
                        $('.heart-icon .wishlist-count').hide();
                    }
                }
            }
        });
    });
});
