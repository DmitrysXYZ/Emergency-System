<?php 

function ems_widget_shortcode( $atts ) {
    // Attributes

    $type = $atts['type'];
    $bgcolor = $atts['bgcolor'];
    $textcolor = $atts['textcolor'];

    // $placeholder = $atts['placeholder'];
    // $height = $atts['height'];

    // include scripts/styles
   require dirname( __FILE__ ) .'/scripts.php';

    $rand = rand();

    if ($type == 'global-wide') {  require dirname( __FILE__ ) .'/widgets/global-wide.php'; }

    else { $output = 'Error: please define a correct widget type'; }

    return $output;

}
add_shortcode( 'ems-widget', 'ems_widget_shortcode' );