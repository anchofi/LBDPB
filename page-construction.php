<?php 
/*
Template Name: Page Construction 
*/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->


<body>
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
<section>
	<div class="container-construction">
		
		<div class="bandeau-construction" style="height: 85px; background-color: green; margin-top: 60px;">
		<img class="logo-construction" src="<?php bloginfo('template_directory'); ?>/img/logo_LBDPB.png" style="width: 200px; padding-left: 200px; margin-top:-14px; " />
		</div>
		
		<!--<h1><?php wp_title('', true); ?></h1>-->
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>			      
			<?php endwhile; ?>
		<?php endif; ?>

		<!-- Begin MailChimp Signup Form -->
		<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
	
		<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   	We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
	
		<div id="mc_embed_signup" style="display: block; margin-top: 35px; margin-left: auto; margin-right: auto; width: 20em;">   
			<form action="http://laboxdupaysbasque.us8.list-manage2.com/subscribe/post?u=a3c4828996625dfa68b7d611b&amp;id=9f33111ad2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre adresse e-mail" required style="width:300px; font-family: Ubuntu, sans-serif; font-size:13px; text-align: center;">
    			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    			<div style="position: absolute; left: -5000px;">
    				<input type="text" name="b_a3c4828996625dfa68b7d611b_9320041a2a" tabindex="-1" value="">
    			</div>
    			<div class="clear">
    				<input type="submit" value="Validez" name="subscribe" id="mc-embedded-subscribe" class="button" style="width:300px; font-family: Ubuntu, sans-serif; background-color: green;">
    			</div>
			</form>
		</div><!--End mc_embed_signup-->

		<div class="piment-construction">
		<img class="piment" src="<?php bloginfo('template_directory'); ?>/img/piments.png" style="width: 100px;	margin-top: 20px; display: block; margin-left: auto; margin-right: auto;" />
		</div>


	</div><!-- /.container-construction -->

</section>
</body>
</html>
