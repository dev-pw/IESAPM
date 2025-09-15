<?php
/*--------------------------------------------------------------
ESTILOS E SCRIPTS
--------------------------------------------------------------*/
function enqueue_scripts() {

	// VERSÃO DO TEMA
	$tema_version = 1.3;

	// OWL CAROUSEL 2
	if(is_front_page()) :
		wp_enqueue_style('owlcarousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css', array(), $tema_version, 'all');
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri().'/node_modules/owl.carousel/dist/owl.carousel.min.js', array('jquery'), $tema_version, true );
	endif;

	// Lightbox2
	if(is_page(61)) :
		wp_enqueue_style('lightbox2', get_template_directory_uri().'/node_modules/lightbox2/dist/css/lightbox.min.css', array(), $tema_version, 'all');
		wp_enqueue_script( 'lightbox2', get_template_directory_uri().'/node_modules/lightbox2/dist/js/lightbox.min.js', array('jquery'), $tema_version, true );
	endif;

	// jquery UI (Datepicker)
	if(is_page(44)) :
	wp_enqueue_style('jquery-ui', get_template_directory_uri().'/node_modules/jquery-ui/dist/themes/base/jquery-ui.min.css', array(), $tema_version, 'all');
	wp_enqueue_script( 'jquery-ui', get_template_directory_uri().'/node_modules/jquery-ui/dist/jquery-ui.min.js', array('jquery'), $tema_version, true );
	endif;

	//FONTAWESOME
//wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/ac0d7d3790.js', array('jquery'), $tema_version, true );
wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/vendors/fontawesome-free-6.4.2-web/css/all.min.css', array(), $tema_version, 'all' );


	// THEME CSS
	wp_enqueue_style('tema', get_template_directory_uri().'/css/theme.min.css', array(), $tema_version, 'all');

    // THEME JS
	wp_enqueue_script( 'tema', get_template_directory_uri().'/js/theme.js', array('jquery'), $tema_version, true );

	// CSS DEFAULT
	wp_enqueue_style('default-style', get_stylesheet_uri(), array(), $tema_version, 'all');

}
add_action('wp_enqueue_scripts', 'enqueue_scripts');



/*--------------------------------------------------------------
CONFIGURACOES DO TEMA
--------------------------------------------------------------*/

function setup_theme() {

	// Adicionar title dinamicamente
	add_theme_support('title-tag');

	// Esconder barra logada wordpress
	//add_filter('show_admin_bar', '__return_false');

	// Habilitar imagem destacada
	add_theme_support('post-thumbnails');

	// habilitar resumo em páginas
	add_post_type_support( 'page', 'excerpt' );

	// habilitar responsivo em todos os embeds (youtube)
	add_theme_support( 'responsive-embeds' );

	// Registrar menus
	register_nav_menus( array(
		'menu-principal' => 'Menu principal',
	) );
}

add_action( 'after_setup_theme', 'setup_theme' );

add_filter('single_template', function($the_template){
		foreach( (array) get_the_category() as $cat ) {
			if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") )
				return TEMPLATEPATH . "/single-{$cat->term_id}.php";
		}
		return $the_template;
	}
);


/*--------------------------------------------------------------
CPT
--------------------------------------------------------------*/
include ('inc/cpt/graduacao-cpt.php');
include ('inc/cpt/pos-graduacao-cpt.php');
include ('inc/cpt/extensao-cpt.php');
include ('inc/cpt/corpo-docente-cpt.php');

/*--------------------------------------------------------------
Default
--------------------------------------------------------------*/
include ('inc/default.php');

/*--------------------------------------------------------------
Paginação
--------------------------------------------------------------*/
include ('inc/paginacao.php');

/*--------------------------------------------------------------
Pre_get_posts
--------------------------------------------------------------*/
include ('inc/pre_get_posts.php');

?>
