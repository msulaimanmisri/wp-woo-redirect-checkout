<?php

/*
 * Plugin Name: WooCommerce Redirect Checkout
 * Plugin URI: https://github.com/msulaimanmisri/wp-woo-redirect-checkout
 * Description: A simple plugin that redirect customer to Checkout page without need to see the Cart page
 * Version: 1.1
 * Author: Muhamad Sulaiman Misri
 * Author URI: https://github.com/msulaimanmisri
 * Text Domain: wp-woo-redirect-checkout
*/
if (!defined('ABSPATH')) {
  exit;
}

require 'Controller/RedirectController.php';
