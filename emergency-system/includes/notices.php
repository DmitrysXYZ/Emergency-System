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


add_action( 'admin_init', array( 'PAnD', 'init' ) );
add_action( 'admin_notices', 'ems__active' );
// end free only