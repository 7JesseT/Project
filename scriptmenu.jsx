<script>
    // Initialize cart count
    var cartCount = 0;

    // Get all "Add to Cart" buttons
    var addToCartButtons = document.querySelectorAll('.add-to-cart');

    // Get cart icon element
    var cartIcon = document.getElementById('cart-icon');

    // Loop through each button
    addToCartButtons.forEach(function(button) {
        // Add click event listener to each button
        button.addEventListener('click', function(event) {
            // Increment cart count
            cartCount++;

            // Update cart icon with new count
            cartIcon.setAttribute('data-count', cartCount);
        });
    });
</script>
