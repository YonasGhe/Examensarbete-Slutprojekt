document.addEventListener("DOMContentLoaded", function() {
  const cartIcon = document.getElementById("cart-icon");
  if (cartIcon) {
    cartIcon.addEventListener("click", function(event) {
      event.preventDefault();
      window.location.href = cart_vars.cart_url;
    });
  }
});
