<?php

// include styles and scripts when shortcode is added  
$google_font = 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap';
wp_enqueue_style( 'ems__google_font', $google_font, false );

wp_enqueue_style( 'ems__tabulator_styles',  EMS_PLUGIN_DIR . '/vendor/tabulator/tabulator_materialize.min.css', array(), filemtime( EMS_PLUGIN_PATH . '/vendor/tabulator/tabulator_materialize.min.css' ) );

wp_enqueue_style( 'ems__styles',  EMS_PLUGIN_DIR . '/assets/styles.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/styles.css' ) );

wp_enqueue_script( 'ems__axios',  EMS_PLUGIN_DIR . '/vendor/axios.min.js', array(), filemtime( EMS_PLUGIN_PATH . '/vendor/axios.min.js' ), true );

wp_enqueue_script("moment");

wp_enqueue_script( 'ems__tabulator',  EMS_PLUGIN_DIR . '/vendor/tabulator/tabulator.min.js', array(), filemtime( EMS_PLUGIN_PATH . '/vendor/tabulator/tabulator.min.js' ), true );

wp_enqueue_script( 'ems__vue_tabulator',  EMS_PLUGIN_DIR . '/vendor/tabulator/vue-tabulator.min.js', array(), filemtime( EMS_PLUGIN_PATH . '/vendor/tabulator/vue-tabulator.min.js' ), true );

wp_enqueue_script( 'ems__app',  EMS_PLUGIN_DIR . '/assets/app.js', array(), filemtime( EMS_PLUGIN_PATH . '/assets/app.js' ), true );