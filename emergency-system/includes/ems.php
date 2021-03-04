<!-- <meta name="generator" content="Emergency System WordPress Plugin" /> -->
<!-- <meta name="keywords" content="Emergency System"> /> -->
<!-- header('x-powered-by: Emergency System(?:/([\\d.]+))?\\;version:\\1');  -->

<?php
$value = 'EMS';

setcookie("EMS", $value);
setcookie("EMS", $value, time()+3600);  /* expire in 1 hour */
?>

<global-ems>
			
			<!-- Start Work -->
			<div id="fh5co-work">
				<div class="container ems">
					<div class="row">
						<div class="col-md-12">
                        
                        <center><h2>Emergency System</h2></center>

<hr>
           <div class="alert-message alert-message-danger">
                <h4>
                    <i class="fas fa-biohazard"></i> Alert Message Danger</h4>
                <p>
                The pandemic is very dangerous. Keep frequently informed about detailed expected pandemic goverment conditions and risks. Follow                orders and any advice given by your authorities under all circumstances, be prepared for extraordinary measures.</p>
            </div>	

<hr>
<small>Made With <i class="fa fa-heart"></i> By <a href="http://dmitrys.xyz/app/" target="_blank" class="ems">Dmitrys.xyz</a></small>
<br>
<br>
<center><img src="<?php echo plugin_dir_url( __FILE__ ) . '../assets/who.png'; ?>"></center>

						</div>					

					</div>

				</div>
			</div>
			<!-- End Work -->
           
<global-ems>
