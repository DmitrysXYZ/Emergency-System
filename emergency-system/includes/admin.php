<?php

// include styles and scripts when shortcode is added  
$google_font = 'https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap';
wp_enqueue_style( 'ems__google_font', $google_font, false );


wp_enqueue_style( 'ems__panel',  EMS_PLUGIN_DIR . '/assets/css/panel.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/panel.css' ) );

wp_enqueue_style( 'ems__fontawesome',  EMS_PLUGIN_DIR . '/assets/css/fontawesome.min.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/fontawesome.min.css' ) );
wp_enqueue_style( 'ems__all',  EMS_PLUGIN_DIR . '/assets/css/all.min.css', array(), filemtime( EMS_PLUGIN_PATH . '/assets/css/all.min.css' ) );

?>
<div class="wrap">

			<!-- Start Intro -->
			<div id="fh5co-intro">
				<div class="container" id="general">
					<h2>Emergency System | <?php echo EMS_VERSION ?></h2>
                    <hr>
     <b>
     Show support for Emergency System Plugin with a 5-star rating » <a href=      "https://wordpress.org/support/plugin/emergency-system/reviews/?rate=5#new-post" target="_blank">Rate the plugin</a>
     </b>
				</div>
			</div>
			<!-- End Intro -->


				<!-- Start Pre Code -->
				
<div class="container">
<div class="fh5co-spacer fh5co-spacer-md"></div>
<h2 class="h2">== Usage ==</h2>
Here is the basic shortcode.
<br>
Add shortcodes any page or post
<br>
<br>
<b>**Emergency System**</b>
<br>
<br>
<code>
[ems-widget type="global-ems"]
<br>
<br>
</code>
<b>**Biohazard Meter**</b>
<br>
<br>
<code>
[eas-widget type="global-eas"]
</code>
</div>
</div>				
				<!-- End Pre Code -->
                
         <div class="fh5co-spacer fh5co-spacer-md"></div>
                
             <!-- Start  Let's Chat -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="h2">Dmitrys Co.</h2>
						<p>Lõõtsa 8a, Tallinn, Harjumaa 11415, Estonia</p>
     <b>
     Dmitrys.xyz &#xA9; 2018 - 2021 |
     Made With <i class="fa fa-heart"></i> By <a href="https://dmitrys.xyz">Dmitrys.xyz</a> All Rights Reserved.
     </b>
     <br>
     <br>
					</div>
				</div>
			</div>
			<!-- End  Let's Chat -->
            			
</div>