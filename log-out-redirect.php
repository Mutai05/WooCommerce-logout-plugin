<?php
/**
 * Plugin Name: Log Out Redirect
 * Plugin URI: https://mutaikelvin.com/
 * Description: Redirects users to the site URL after logging out from WooCommerce.
 * Author: Mutai Kelvin
 * Author URI: https://mutaikelvin.com/
 * Version: 1.5
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

function lk_custom_logout_redirect($logout_url)
{
    if (strpos($logout_url, 'customer-logout') !== false) {
        return home_url(); // Redirect to the site URL if it's a WooCommerce logout URL.
    }
    return $logout_url; // Return the original URL for other logout cases.
}
add_filter('woocommerce_get_logout_url', 'lk_custom_logout_redirect', 10, 1);