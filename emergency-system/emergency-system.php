<?php
/*
* Plugin Name: Emergency System
* Description: Helping people stay alert in the event of a biological hazard. To give a step to scientists in this field to publish their scientific works, reports, research.
* Author: Dmitry N. Giannopulos
* Version: 1.0
* Author URI: https://dmitrys.xyz/
* Text Domain: emergency-system
* Domain Path: /languages/
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

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( !defined('EMS_PLUGIN_DIR') ) {
    define( 'EMS_PLUGIN_DIR', plugins_url('', __FILE__ ) );
}

if ( !defined('EMS_PLUGIN_PATH') ) {
    define( 'EMS_PLUGIN_PATH', plugin_dir_path(__FILE__ ) );
}

define( 'EMS_VERSION', '1.0' );
define( 'EMS_DEBUG', true );
define( 'EMS_URL', 'https://dmitrys.xyz/app/' );

class EMS_Stats {

    public function __construct() {
        //plugin settings
        $plugin = plugin_basename( __FILE__ );
        if ( is_admin() )
            add_filter( "plugin_action_links_$plugin", array( &$this, 'setting_link' ) );
    }// end function

    // quick setting link in plugin section
    public function setting_link($links) {
        $settings_link = '<a href="https://dmitrys.xyz/app/login.php" target="_blank">Settings</a>';
        array_unshift( $links, $settings_link );
        return $links;
    }// end function
}

$ems_stats = new EMS_Stats;
/*-----------------------------------------
                Shortcodes
------------------------------------------*/
include_once EMS_PLUGIN_PATH .'/includes/ems-widget.php';

/*-----------------------------------------
            Text Domain Setup
------------------------------------------*/
function ems__textdomain() {
    load_plugin_textdomain( 'emergency-system', false, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'init', 'ems__textdomain' );

if ( is_admin() ) {

    include_once EMS_PLUGIN_PATH . '/includes/notices.php';
    require __DIR__ . '/vendor/persist-admin-notices-dismissal/persist-admin-notices-dismissal.php';
    add_action( 'admin_init', array( 'PAnD', 'init' ) );
}

function ems__styles() {
    $google_font = 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap';
    wp_register_style( 'ems__styles_font',  $google_font );
    wp_enqueue_style( 'ems__styles_font' );

    wp_register_style( 'ems__styles_admin',  EMS_PLUGIN_DIR . '/assets/styles-admin.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/styles-admin.css' ) );
    wp_enqueue_style( 'ems__styles_admin' );
}

add_action( 'admin_enqueue_scripts', 'ems__styles' );
