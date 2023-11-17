/*
 * Plugin Name: WooCommerce Redirect Checkout
 * Plugin URI: https://github.com/msulaimanmisri/wp-woo-redirect-checkout
 * Description: A simple plugin that redirect customer to Checkout page without need to see the Cart page
 * Version: 1.0
 * Author: Muhamad Sulaiman Misri
 * Author URI: https://github.com/msulaimanmisri
 * Text Domain: wp-woo-redirect-checkout
*/

if (!defined('ABSPATH')) {
    exit;
}

// Early return
if (!in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))) {

  
    function sm_show_unactive_woo() {
        ?>
        <div class="error notice">
            <p><?php 'Anda wajib untuk aktifkan plugin woocommerce jika ingin menggunakan plugin ini'; ?></p>
        </div>
        <?php
    }

  add_action('admin_notices', 'sm_show_unactive_woo');

}

function sm_redirect_checkout() {
    global $woocommerce;
    $sm_redirect_checkout = $woocommerce->cart->get_checkout_url();
    return $sm_redirect_checkout;
  }

add_filter('add_to_cart_redirect', 'sm_redirect_checkout');
