
jQuery(document).ready(function($) {
    function updateCartIcon() {
        
        $.ajax({
            url: wc_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'get_cart_contents'
            },
            success: function(response) {
                $('.cart-icon').html(response);
            }
        });
    }

    updateCartIcon();

    $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
        updateCartIcon();
    });
});

    jQuery(document).ready(function($) {
        $('.heart-icon').click(function(e) {
            e.preventDefault(); 
    
            var $heartIcon = $(this); 
    
            var productId = $heartIcon.data('product-id');
            var isFavorite = $heartIcon.hasClass('favorite'); 
            var action = isFavorite ? 'remove' : 'add'; 
    
    
            $.ajax({
                url: myAjax.ajaxurl, 
                type: 'POST',
                data: {
                    action: 'update_favorite_products',
                    product_id: productId,
                    action_type: action
                },
                success: function(response) {    
                    if (action === 'add') {
                        $heartIcon.addClass('favorite'); 
                    } else {
                        $heartIcon.removeClass('favorite'); 
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        });
    });
    