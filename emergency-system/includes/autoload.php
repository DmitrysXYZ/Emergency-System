<?php
/*
 * Add my new menu to the Admin Control Panel
 */

add_action( 'admin_menu', 'emergency' );

// Add a new top level menu link to the ACP
function emergency()
{
      add_menu_page(
        'Emergency System',
        'Emergency System',
        'manage_options',
		 plugin_dir_path(__FILE__) . 'admin.php',
         null,
		 plugins_url( 'emergency-system/assets/logo.png' ),
		 10
    );
}
