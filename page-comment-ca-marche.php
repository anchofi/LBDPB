<?php 
/*
Template Name: Comment ça marche ? 
*/
?>


<?php get_header(); ?>

<!-- Ci-dessous boucle  qui commence par if et se termine par endif, avec à l'intérieur une autre boucle qui commence par while
	et se termine par endwhile -->



<section>

	<div class="container">
		<h1><?php wp_title('', true); ?></h1>
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>			      
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

</section>




<?php get_footer() ?>