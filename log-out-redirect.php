<?php
/**
 * Plugin Name: Log Out Redirect
 * Plugin URI: https://mutaikelvin.com/
 * Description: Redirects users to the site URL after logging out from WooCommerce.
 * Author: Mutai Kelvin
 * Author URI: https://mutaikelvin.com/
 * Version: 1.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function lk_custom_logout_redirect()
{
    return home_url(); // Redirect to the site URL.
}
add_filter('woocommerce_logout_default_redirect_url', 'lk_custom_logout_redirect');