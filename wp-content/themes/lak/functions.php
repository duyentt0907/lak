<?php
// Add custom Theme Functions here
function move_cart_to_menu() { ?>

<script type="text/javascript">

jQuery( document ).ready(function() {

jQuery( '.header-bottom-nav .cart-item' ).appendTo( jQuery( '.move-cart .col-inner' ) );

});
</script>

<?php }

add_action( 'wp_footer', 'move_cart_to_menu' );