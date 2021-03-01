<?php 

function ems_widget_shortcode( $atts ) {
    // Attributes
    $atts = shortcode_atts(
        array(
            'type' => 'global-ems',
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

    if ($type == 'global-ems') {  require dirname( __FILE__ ) .'/widgets/ems.php'; }

    else { $output = 'Error: please define a correct widget type'; }

    return $output;

}
add_shortcode( 'ems-widget', 'ems_widget_shortcode' );