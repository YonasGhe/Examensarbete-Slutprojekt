
jQuery(document).ready(function($) {
    // Function to update cart icon
    function updateCartIcon() {
        // Make an AJAX request to get the current cart contents
        $.ajax({
            url: wc_cart_params.ajax_url,
            type: 'POST',
            data: {
                action: 'get_cart_contents'
            },
            success: function(response) {
                // Update the cart icon based on the response
                $('.cart-icon').html(response);
            }
        });
    }

    // Call updateCartIcon() initially to set the initial cart state
    updateCartIcon();

    // Listen for cart updates (e.g., when a product is added to the cart)
    $(document.body).on('added_to_cart', function(event, fragments, cart_hash, $button) {
        // Update the cart icon when a product is added to the cart
        updateCartIcon();
    });
});

/*
    // Event handler for clicking the heart icon
    jQuery(document).ready(function($) {
        // Event handler for clicking the heart icon
        $('.heart-icon').click(function(e) {
            e.preventDefault(); // Prevent default behavior of the link
    
            var $heartIcon = $(this); // Store reference to the clicked heart icon
    
            var productId = $heartIcon.data('product-id'); // Get the product ID
            var isFavorite = $heartIcon.hasClass('favorite'); // Check if already favorite
            var action = isFavorite ? 'remove' : 'add'; // Determine action
    
            // Send AJAX request to add/remove product from favorites
            $.ajax({
                url: myAjax.ajaxurl, // Access ajaxurl from myAjax object
                type: 'POST',
                data: {
                    action: 'update_favorite_products',
                    product_id: productId,
                    action_type: action
                },
                success: function(response) {
                    // Update UI based on response
                    if (action === 'add') {
                        // Product added to favorites
                        $heartIcon.addClass('favorite'); // Use the stored reference
                    } else {
                        // Product removed from favorites
                        $heartIcon.removeClass('favorite'); // Use the stored reference
                    }
                },
                error: function(xhr, status, error) {
                    // Handle AJAX errors here
                    console.error('AJAX Error:', error);
                }
            });
        });
    });
    


/*
jQuery(document).ready(function($) {
    $('.heart-icon').click(function(e) {
        e.preventDefault(); // Prevent default behavior of the link

        var $heartIcon = $(this); // Store reference to the clicked heart icon

        var productId = $heartIcon.data('product-id'); // Get the product ID
        var isFavorite = $heartIcon.hasClass('favorite'); // Check if already favorite
        var action = isFavorite ? 'remove' : 'add'; // Determine action

        // Send AJAX request to add/remove product from favorites
        $.ajax({
            url: myAjax.ajaxurl, // Access ajaxurl from myAjax object
            type: 'POST',
            data: {
                action: 'update_favorite_products',
                product_id: productId,
                action_type: action
            },
            success: function(response) {
                // Update UI based on response
                if (action === 'add') {
                    // Product added to favorites
                    $heartIcon.addClass('favorite'); // Use the stored reference
                } else {
                    // Product removed from favorites
                    $heartIcon.removeClass('favorite'); // Use the stored reference
                }
            }
        });
    });
});
*/