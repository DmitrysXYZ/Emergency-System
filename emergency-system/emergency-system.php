<?php
/*
* Plugin Name: Emergency System
* Description: Helping people stay alert in the event of a chemical, biological, radiological, nuclear hazard (CBRN).
* Author: Dmitry N. Giannopulos
* Version: 1.0.6
* Author URI: https://dmitrys.xyz/
* Text Domain: emergency-system
* Domain Path: /languages/
* License: GPLv3 or later
* License URI: https://www.gnu.org/licenses/gpl-3.0.html
*
* Emergency System
* Copyright (C) 2018-2021, Dmitrys.xyz - info@dmitrys.xyz
*
* You should have received a copy of the GNU General Public License
* along with Emergency System. If not, see <http://www.gnu.org/licenses/>.
*
* @package Emergency System
*/

// Exit if accessed directly.

/*-----------------------------------------
                Autoloader
------------------------------------------*/
require_once dirname( __FILE__ ) . '/includes/autoload.php';


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( !defined('EMS_PLUGIN_DIR') ) {
    define( 'EMS_PLUGIN_DIR', plugins_url('', __FILE__ ) );
}

if ( !defined('EMS_PLUGIN_PATH') ) {
    define( 'EMS_PLUGIN_PATH', plugin_dir_path(__FILE__ ) );
}


/**
 * Defines Constants for Future use
 */
define( 'EMS_FILE', __FILE__ );
define( 'EMS_VERSION', '1.0.6' );
define( 'EMS_LANG_DIR', 'languages');



class EMS_Stats {

    public function __construct() {
        //plugin settings
        $plugin = plugin_basename( __FILE__ );
        if ( is_admin() )
            add_filter( "plugin_action_links_$plugin", array( &$this, 'setting_link' ) );
    }// end function

    // quick setting link in plugin section
    public function setting_link($links) {
        $settings_link = '<a href="admin.php?page=emergency-system/includes/admin.php">Settings</a>';
        array_unshift( $links, $settings_link );
        return $links;
    }// end function
}

$ems_stats = new EMS_Stats;
/*-----------------------------------------
                Shortcodes
------------------------------------------*/
include_once EMS_PLUGIN_PATH .'/includes/widget.php';

/*-----------------------------------------
            Text Domain Setup
------------------------------------------*/
function ems__textdomain() {
    load_plugin_textdomain( 'emergency-system', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'ems__textdomain' );

function ems__styles() {
    $google_font = 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap';
    wp_register_style( 'ems__styles_font',  $google_font );
    wp_enqueue_style( 'ems__styles_font' );

    wp_register_style( 'ems__styles_admin',  EMS_PLUGIN_DIR . '/assets/css/styles-admin.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/styles-admin.css' ) );
    wp_enqueue_style( 'ems__styles_admin' );
}

add_action( 'admin_enqueue_scripts', 'ems__styles' );


// Only for WP 4.4.x or higher
function posk_requires_wordpress_version() {
	global $wp_version;
	$plugin = plugin_basename( __FILE__ );
	$plugin_data = get_plugin_data( __FILE__, false );
	$require_wp = "4.5";
 
	if ( version_compare( $wp_version, $require_wp, "<" ) ) {
		if( is_plugin_active($plugin) ) {
			deactivate_plugins( $plugin );
			wp_die( "<strong>".$plugin_data['emergency-system/emergency-system.php']."</strong>Emergency System Plugin requires <strong>WordPress ".$require_wp."</strong> or higher, and has been deactivated! Please upgrade WordPress and try again.<br /><br />Back to the WordPress <a href='".get_admin_url(null, 'plugins.php')."'>Plugins page</a>." );
		}
	}
}
add_action( 'admin_init', 'posk_requires_wordpress_version' );
