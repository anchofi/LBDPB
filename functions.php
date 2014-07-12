<?php

// Ajouter des images à la une ("thumbnail")
add_theme_support( 'post-thumbnails' );

// Ajouter la gestion de woocommerce dans la plateforme d'admin wp
add_theme_support( ‘woocommerce’ );


// Ajouter un menu : étape 1
// Utiliser Bootstrap dans un menu appelé "primary" et ajouter un second menu appelé "Secondary Menu"
// http://code.tutsplus.com/tutorials/how-to-integrate-bootstrap-navbar-into-wordpress-theme--wp-33410
function register_my_menus() { 
  register_nav_menus (
    array(
    'primary'       => __( 'Primary Menu', 'THEMENAME' ),
    'secondary-nav' => __( 'Secondary Menu', 'THEMENAME' ),
    ) 
  );
}

add_action( 'init', 'register_my_menus' );

// Fonction ci-dessous pour rediriger vers la page construction quand l'utilisateur n'est pas connecté en tant que admin WP
function redirect_construction () {
  if( ! is_page('page-construction') AND ! is_super_admin ()) {
    wp_redirect( home_url( "language/fr/page-construction/" ) );
    exit;
  }
}

add_action( 'parse_query', 'redirect_construction');



// Pour modifier le css du premier élément car on ne peut pas le faire dans l'admin WP
function first_item_nav_sec_css($items){
  /*var_dump($items);die;*/  /* Fonction de debug pour afficher tous les paramètres qui entrent en compte dans la fonction first_item_nav_sec_css($items) */
  foreach ($items as $key => $item) :

    if( ! empty($item->lang) ) :
      $items[$key]->classes[] = 'col-xs-4';
      $items[$key]->classes[] = 'col-md-1';
      $items[$key]->classes[] = 'col-md-offset-7';
    endif;
    
  endforeach;

  return $items;
}

add_filter('wp_nav_menu_objects', 'first_item_nav_sec_css');


// Utiliser un menu avec Bootstrap -- https://github.com/twittem/wp-bootstrap-navwalker
require_once('wp_bootstrap_navwalker.php');

/*
// Mettre une sidebar avec des Widgets gérable dans la plateforme WP
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'description'   => 'Displayed in my page',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="section">',
        'after_title'   => '</h4>',
    ));
  }
*/

// Pour pouvoir utiliser WooCommerce dans mon thème WP
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
  echo '<section id="main">';
}

function my_theme_wrapper_end() {
  echo '</section>';
}

/** Remove Showing results functionality site-wide */
function woocommerce_result_count() {
        return;
}

remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);
