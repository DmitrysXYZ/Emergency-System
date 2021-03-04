<?php

function ems__active() {
      if ( ! PAnD::is_admin_notice_active( 'ems-active-3' ) ) {
		  return;
	   }

    ?>
    <div data-dismissible="ems-active-3" class="notice ems-notice ems-shortcode notice-success is-dismissible">
        <div class="col-left"><h2>Emergency System Plugin Is Active</h2></div>
        <div class="col-right"><a href="https://dmitrys.xyz/app/" class="ems-btn" target="_blank">Emergency System</a></div>
    </div>

        <?php
    }
    
function ems__notice_rate()
{
    if ( !PAnD::is_admin_notice_active( 'ems-rating-30' ) ) {
        return;
    }
    ?>
    
    <div data-dismissible="ems-rating-30" class="notice ems-notice notice-success is-dismissible">
        <p class="ems-p"><?php 
    $rating_url = "https://wordpress.org/support/plugin/reviews/?rate=5#new-post";
    $show_support = sprintf( wp_kses( __( 'Show support for Emergency System Plugin with a 5-star rating » <a href="%s" target="_blank">Click here</a>',  'ems' ), array(
        'a' => array(
        'href'   => array(),
        'target' => array(),
    ),
    ) ), esc_url( $rating_url ) );
    echo  $show_support ;
    ?></p>
            </div>
    <?php 
}

add_action( 'admin_init', array( 'PAnD', 'init' ) );
add_action( 'admin_notices', 'ems__active' );
add_action( 'admin_notices', 'ems__notice_rate' );
// end free only