<?php

/*--------------------------------------------------------------
Pré get posts
--------------------------------------------------------------*/
function my_post_queries_corpo_docente ($query) {
  if (! is_admin () && $query-> is_main_query ()) {

	if(is_archive ('corpo-docente')){

		$query->set('order', 'ASC');
		$query->set('orderby', 'title');
		$query->set('posts_per_page', -1);
  	}

  }
}
add_action ('pre_get_posts', 'my_post_queries_corpo_docente');


function my_post_queries_tax_cursos( $query ) {
	if ( ! is_admin() && $query->is_main_query() ) {

		if ( is_tax('modalidade_extensao') ) {

			$query->set('order', 'ASC');
			$query->set('orderby', 'title');
			$query->set( 'posts_per_page', -1 );
		}
	}
}
add_action( 'pre_get_posts', 'my_post_queries_tax_cursos' );

// FUNÇÃO PARA SETAR QUAIS TIPOS DE POST A BUSCA TRAZ COMO RESULTADO
function shapeSpace_filter_search($query) {
	if (!$query->is_admin && $query->is_search) {
		$query->set('post_type', array(
			'post',
		));
	}
	return $query;
}
add_filter('pre_get_posts', 'shapeSpace_filter_search');

?>
