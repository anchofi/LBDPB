
<?php get_header(); ?>

		<div id="content">
			<section>
				<div class="container">
					<h1><?php wp_title('', true); ?></h1>
					<?php while(have_posts()):the_post()?>
					<?php the_content(); ?>
					<?php endwhile; ?>
				</div>
			</section> 
		</div> <!-- end row col-sm-9-->


<!-- Si je veux une sidebar, appliquer la fonction ci-dessous -->

		  <div class="col-sm-3">
		  	<aside>
				<?php dynamic_sidebar('main-sidebar'); ?>
			</aside>
		</div>

<!--fermeture sidebar -->


<?php get_footer() ?>





