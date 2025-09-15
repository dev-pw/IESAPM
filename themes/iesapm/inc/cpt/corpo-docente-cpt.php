<?php
/*
* Custon post corpo docente.
*/


// post type
function corpodocente_cpt(){

    $labels = array(
		'name'                  => _x( 'Corpo Docente', '', '' ),
		'singular_name'         => _x( 'Corpo Docente', '', '' ),
		'menu_name'             => __( 'Corpo Docente', '' ),
		'all_items'             => __( 'Todos os itens', '' ),
		'add_new_item'          => __( 'Adicionar item', '' ),
		'add_new'               => __( 'Adicionar item', '' ),
		'new_item'              => __( 'Novo item', '' ),
		'edit_item'             => __( 'Editar item', '' ),
		'update_item'           => __( 'Atualizar item', '' ),
		'view_item'             => __( 'Ver item', '' ),
		'view_items'            => __( 'Ver todos os itens', '' ),
		'search_items'          => __( 'Buscar item', '' ),
		'not_found'             => __( 'Item não encontrado', '' ),
		'not_found_in_trash'    => __( 'Item não encontrado no lixo', '' ),
		'featured_image'        => __( 'Imagem destacada', '' ),
		'set_featured_image'    => __( 'Definir imagem', '' ),
		'remove_featured_image' => __( 'Remover imagem', '' ),
		'use_featured_image'    => __( 'Usar a imagem', '' ),
	);

    $supports = array(
        'title',
        'editor',
        'thumbnail',
        'author',
        'page-attributes'
    );

    $args = array(
		'label'                 => __( 'Corpo Docente', '' ),
		'description'           => __( 'Corpo Docente', '' ),
		'labels'                => $labels,
		'supports'              => $supports,
		//'taxonomies'            => array( ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		//'menu_position'         => 26,
		'menu_icon'             => 'dashicons-admin-page',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
        'rewrite'               => array( 'slug' => 'corpo-docente' ), // my custom slug
	);
	register_post_type( 'corpo-docente', $args );
}
add_action( 'init', 'corpodocente_cpt', 0 );

?>
