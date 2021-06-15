<?php

// include styles and scripts when shortcode is added  
$google_font = 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap';
wp_enqueue_style( 'ems__google_font', $google_font, false );


wp_enqueue_style( 'ems__styles',  EMS_PLUGIN_DIR . '/assets/css/styles.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/styles.css' ) );

wp_enqueue_style( 'ems__fontawesome',  EMS_PLUGIN_DIR . '/assets/css/fontawesome.min.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/fontawesome.min.css' ) );

wp_enqueue_style( 'ems__all',  EMS_PLUGIN_DIR . '/assets/css/all.min.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/all.min.css' ) );

wp_enqueue_script( 'ems__app',  EMS_PLUGIN_DIR . '/assets/js/app.js', array(), filemtime( EMS_PLUGIN_PATH . '/assets/js/app.js' ), true );