<?php 
/*
Template Name: Page Construction-270614 
*/
?>


<section>

	<div class="container-construction">

		<div class="bandeau-construction" style="height:85px;background-color: green;margin-top: 60px;">
			<img src="<?php bloginfo('template_directory'); ?>/img/Logo_LBDPB_Petit.jpg" width="200px" class="logo-construction" style="padding-left:200px; margin-top:-13px;" />
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
	
		<div id="mc_embed_signup" style=";margin-left: 535px; margin-top:50px;">
			<form action="http://laboxdupaysbasque.us8.list-manage2.com/subscribe/post?u=a3c4828996625dfa68b7d611b&amp;id=9320041a2a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Votre adresse e-mail" required style="width:300px; font-family: Myriad Web Pro; font-size:13px; text-align: center;">
    			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    			<div style="position: absolute; left: -5000px;"><input type="text" name="b_a3c4828996625dfa68b7d611b_9320041a2a" tabindex="-1" value="">
    			</div>
    			<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button" style="width:300px; font-family: Myriad Web Pro; background-color:green;">
    			</div>
			</form>
		</div><!--End mc_embed_signup-->

	</div><!-- /.container-construction -->

</section>

