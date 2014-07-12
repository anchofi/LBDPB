<?php 
/*
Template Name: Comment ça marche ? 
*/
?>

<?php get_header(); ?>

<!-- Ci-dessous boucle  qui commence par if et se termine par endif, avec à l'intérieur une autre boucle qui commence par while
	et se termine par endwhile -->

<section>

	<div class="container-1">
		<div class="row-part-1">
			<h2 class="title-part-1">Comment ça marche ? - Part 1</h2>
			<div class="col-md-3 col-md-offset-3"> <!-- 1° colonne je pousse de 3 row et j'en occupe 3 -->
				
				<!-- Note du 11/07 : PENSER A RAJOUTER ICI LES COLONNES xs (phones) et sm (tablets) -->
				
				<img src="<?php bloginfo('template_directory'); ?>/img/lauburu.png" alt="Picto croix basque" class="lauburu-1">
				<h4>Colonne 1</h4>
			</div>
			<div class="col-md-3"> <!-- 2° colonne j'en occupe 3 -->
				<img src="<?php bloginfo('template_directory'); ?>/img/lauburu.png" alt="Picto croix basque" class="lauburu-2">
				<h4>Colonne 2</h4>
			</div>
			<div class="col-md-3"> <!-- 3° colonne j'en occupe 3 // Total=12 -->
				<img src="<?php bloginfo('template_directory'); ?>/img/lauburu.png" alt="Picto croix basque" class="lauburu-3">
				<h4>Colonne 3</h4>
			</div>
		</div>
	</div> <!-- /.container-1 -->
	
	<div class="container-2">
		<div class="row-part-2">
			<h2 class="title-part-2">Comment ça marche ? - Part 2</h2>
			<div class="col-md-4 col-md-offset-3"> <!-- 1° colonne je pousse de 3 row et j'en occupe 4 -->
				<h4>Colonne 1</h4>
				<img src="<?php bloginfo('template_directory'); ?>/img/chocolat.png" alt="Plaques de chocolat joliment empilées" class="plaques-chocolat">
			</div>
			<div class="col-md-4 col-md-offset-1"> <!-- 2° colonne je pousse de 1 row et j'en occupe 4 // Total=12 -->
				<h4>Colonne 2</h4>
			</div>
		</div>
	</div> <!-- /.container-2 -->

</section>

<?php get_footer() ?>