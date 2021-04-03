<?php 

function ems_widget_shortcode( $atts ) {
    // Attributes
    $atts = shortcode_atts(
        array(
            'type' => 'global-ems'
        ),
        $atts,
        'ems-widget'
    );

    $type = $atts['type'];

    // $placeholder = $atts['placeholder'];
    // $height = $atts['height'];

    // include scripts/styles
   require dirname( __FILE__ ) .'/scripts.php';

    $rand = rand();

    if ($type == 'global-ems') {  require dirname( __FILE__ ) .'/ems.php'; }

    else { $output = 'Error: please define a correct widget type'; }

    return $output;

}
add_shortcode( 'ems-widget', 'ems_widget_shortcode' );



function eas_widget_shortcode( $atts ) {
    // Attributes
    $atts = shortcode_atts(
        array(
            'type' => 'global-eas'
        ),
        $atts,
        'eas-widget'
    );

    $type = $atts['type'];

    // $placeholder = $atts['placeholder'];
    // $height = $atts['height'];

    // include scripts/styles
   require dirname( __FILE__ ) .'/scripts.php';

    $rand = rand();

    if ($type == 'global-eas') {  require dirname( __FILE__ ) .'/eas.php'; }

    else { $output = 'Error: please define a correct widget type'; }

    return $output;

}
add_shortcode( 'eas-widget', 'eas_widget_shortcode' );
