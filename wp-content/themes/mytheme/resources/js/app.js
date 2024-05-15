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
