<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/stylesheets/library/reset.css" type="text/css">

	<!-- Lien pour aller chercher le fichier font-awesome dans le web -->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> ﻿

	<!-- Lien pour aller chercher le fichier bootstrat.min.css dans mon dossier css dans mon dossier site -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Optional theme -->	
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/stylesheets/style_index.css" type="text/css">
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	<!-- Lien pour aller chercher la typo sympa dans Google Font que je veux utiliser pour ma nav de header -->
	<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
</head>


<body>
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


<!-- Début test main-nav à partir de bootstrap -->

<nav class="navbar navbar-default green" role="navigation">
  <div class="container-fluid" style="height:85px">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><img src="img/Logo_LBDPB_Petit.jpg" width="200px"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav">
       
        <li>
        	<a href="commentcamarche.php">Comment<br>ça marche ?</a>
        </li>
        <li>
        	<a href="lesproduits.php">Les produits</a>
        </li>
        <li>
        	<a href="sabonner.php">S'abonner</a>
        </li>
        <li>
        	<a href="offrir.php">Offrir</a>
        </li>
        <li>
        	<a href="boutique.php">Boutique</a>
        </li>

      </ul>


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<!-- Fin test main-nav à partir de bootstrap -->



<!--
<header>
	<div>
		<ul class="minor-header">
			<li>
			<a href=""><img src="img/flag-en.png"> English version</a>
			</li>
		
			<li>		
			<a href=""><img src="img/picto-cadenas-ferme-gris.jpg" width="25px"> Se connecter / S'inscrire</a>
			</li>
		
			<li>
			<a href=""><img src="img/picto_panier.png" width="25px"> Mon panier</a>
			</li>
		</ul>
	</div>
	
	<nav>
		<ul class="main-nav">
			<li>
			<a href="index.html"><img src="img/Logo_LBDP_Petit.jpg" width="200px"></a>
			</li>
		
			<li>
			<a href="commentcamarche.php">Comment ça marche ?</a>
			</li>
		
			<li>
			<a href="#">Les produits</a>
			</li>

			<li>
			<a href="#">S'abonner</a>
			</li>

			<li>
			<a href="#">Offrir</a>
			</li>

			<li>
			<a href="#">Boutique</a>
			</li>
		</ul>
	</nav>
</header>
-->