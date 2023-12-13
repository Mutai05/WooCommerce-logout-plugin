# WooCommerce-logout-plugin
This plugin, when activated, intercepts the WooCommerce logout process and replaces the default logout redirect URL with the site's URL, ensuring that users are redirected to the site's homepage after logging out from their WooCommerce account.

Let's break down the code step by step:

```php
<?php
/**
 * Plugin Name: Log Out Redirect
 * Plugin URI: https://mutaikelvin.com/
 * Description: Redirects users to the site URL after logging out from WooCommerce.
 * Author: Mutai Kelvin
 * Author URI: https://mutaikelvin.com/
 * Version: 1.0
 */
```

This section provides information about the plugin:

- `Plugin Name`: Name of the plugin displayed in the WordPress dashboard.
- `Plugin URI`: URL to the plugin's page (in this case, it's the author's website).
- `Description`: Brief description of what the plugin does.
- `Author`: Name of the plugin author.
- `Author URI`: URL to the author's website.
- `Version`: Plugin version.

The next part of the code contains the functionality:

```php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
```

This line checks if the constant `ABSPATH` is defined. `ABSPATH` is a constant that refers to the absolute path to the WordPress directory. If it's not defined (which would mean someone is trying to access this file directly without WordPress), the code exits to prevent any direct access to the plugin file.

```php
function lk_custom_logout_redirect() {
    return home_url(); // Redirect to the site URL.
}
add_filter( 'woocommerce_logout_default_redirect_url', 'lk_custom_logout_redirect' );
```

Here's what this part does:

- `lk_custom_logout_redirect()` is a function defined to handle the redirection after the user logs out.
- `home_url()` retrieves the URL for the site where WordPress is installed.
- `add_filter()` is a WordPress function used to hook into the `woocommerce_logout_default_redirect_url` filter. This filter allows us to modify the default logout redirect URL in WooCommerce.
- We're hooking the `lk_custom_logout_redirect` function to this filter, which will replace the default logout redirect URL with the site's URL retrieved by `home_url()`.

In summary, this plugin, when activated, intercepts the WooCommerce logout process and replaces the default logout redirect URL with the site's URL, ensuring that users are redirected to the site's homepage after logging out from their WooCommerce account.
