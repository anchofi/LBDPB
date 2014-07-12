<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	
	<!-- La balise <meta charset="UTF-8"> indique "langue universelle" et m'évite de coder les accents -->
	<!-- Mais WordPress propose la balise <meta charset="<?php bloginfo( 'charset' ); ?>" /> en remaplcement, pas indispensable mais utile quand on gère un site mutlilangue -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php echo $title; ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- AVANT D'UTILISER WORDPRESS j'avais pour le lien ci-dessous <link rel="stylesheet" href="css/stylesheets/library/reset.css" type="text/css"> mais avec WordPress je dois rajouter la fonction d'appel php et j'obtiens donc le lien ci-après -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/stylesheets/library/reset.css" type="text/css">

	<?php wp_head(); ?>

	<!-- Lien pour aller chercher le fichier font-awesome dans le web -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> ﻿

	<!-- Lien pour aller chercher le fichier bootstrat.min.css dans mon dossier css dans mon dossier site -->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">

	<!-- Optional theme -->	
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" type="text/css">
	<script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<!-- Lien pour aller chercher la typo sympa dans Google Font que je veux utiliser pour ma nav de header -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Walter+Turncoat' rel='stylesheet' type='text/css'>

	<!-- Lien pour intégrer MailChimp -->
	<link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
		#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
		/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   	We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>

</head>


<body>
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php wp_nav_menu(array(
    	        'menu'              => 'secondary-nav',
    	        'theme_location'    => 'secondary-nav',
    	        'container'         => 'nav',
    	        'menu_class'        => 'row row-nav-secondaire',
    	)

    	);

    ?>


 <!-- 
 	<nav>
    	<div class="row row-nav-secondaire">
    		<div class="col-xs-4 col-md-1 col-md-offset-8">
    			<span><a href="#">Version anglaise</a></span>
    		</div>
    		<div class="col-xs-4 col-md-1">
    			<span><a href="#">Se connecter / S'inscrire</a></span>
    		</div>
    		<div class="col-xs-4 col-md-1">
    			<span><a href="#">Panier</a></span>
    		</div>
    	</div>
    </nav> -->


<!----------------------- Début test main-nav à partir de bootstrap ---------------------------->

<nav class="navbar navbar-default green" role="navigation">
  
  <div class="container-fluid">
    
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a class="navbar-brand" href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo_LBDPB.png" alt="Logo La Box du Pays Basque" width="200px"></a>
    
    </div> <!-- /.navbar-header -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    


<!-- nav bootstrap que je mets en commentaire car je ne vais plus l'utiliser, j'utilise maintenant WordPress cf fonction juste après

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">  
      <ul class="nav navbar-nav"> 
        <li>
        	<a href="commentcamarche.php"><span class="principe">Comment<br>ça marche ?</span></a>
        </li>
        <li>
        	<a href="lesproduits.php"><span class="products">Les produits</span></a>
        </li>
        <li>
        	<a href="sabonner.php"><span class="sabonner">S'abonner</span></a>
        </li>
        <li>
        	<a href="offrir.php"><span class="offer">Offrir</span></a>
        </li>
        <li>
        	<a href="boutique.php"><span class="boutik">Boutique</span></a>
        </li>
      </ul>
  -->
<!--
    </div> --><!-- /.navbar-collapse -->


<!----------------------------- Fin test main-nav à partir de bootstrap -------------------------------------------->


<?php
	          wp_nav_menu( array(
	              'menu'              => 'primary',
	              'theme_location'    => 'primary',
	              'depth'             => 2,
	              'container'         => 'div',
	              'container_class'   => 'collapse navbar-collapse',
	      		  'container_id'      => 'bs-example-navbar-collapse-1',
	              'menu_class'        => 'nav navbar-nav',
	              'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	              'walker'            => new wp_bootstrap_navwalker())
	          );
	     			 ?>

<!--

<div class="menu-nav-secondaire-fr-container">
	<ul id="menu-nav-secondaire-fr" class="secondary-nav">
		<li id="menu-item-141-en" class="lang-item lang-item-15 lang-item-en menu-item menu-item-type-custom menu-item-object-custom menu-item-141-en">
			<a title="<img src=&quot;http://localhost:8888/wp-content/plugins/polylang/flags/en_US.png&quot; title=&quot;English&quot; alt=&quot;English&quot; />&nbsp;English" href="http://localhost:8888/language/en/title-of-the-home-page-in-english/" hreflang="en"><img src="http://localhost:8888/wp-content/plugins/polylang/flags/en_US.png" title="English" alt="English">&nbsp;English</a>
		</li>
	
		<li id="menu-item-143" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
			<a title="Se connecter / S'inscrire" href="http://localhost:8888/language/fr/se-connecter-sinscrire/">Se connecter / S’inscrire</a>
		</li>
	
		<li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
			<a title="Mon panier" href="http://localhost:8888/language/fr/mon-panier/">Mon panier</a>
		</li>
	</ul>
</div>

-->



  </div><!-- /.container-fluid -->
</nav><!-- /.navbar navbar-default green -->

