<?php
/*
* Custon post cursos pós-graduação.
*/


// post type
function posgraduacao_cpt(){

    $labels = array(
		'name'                  => _x( 'Cursos de Pós-Graduação', '', '' ),
		'singular_name'         => _x( 'Curso de Pós-Graduação', '', '' ),
		'menu_name'             => __( 'Pós-Graduação', '' ),
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
		'label'                 => __( 'Pós-Graduação', '' ),
		'description'           => __( 'Pós-Graduação', '' ),
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
        'rewrite'               => array( 'slug' => 'pos-graduacao' ), // my custom slug
	);
	register_post_type( 'pos-graduacao', $args );
}
add_action( 'init', 'posgraduacao_cpt', 0 );

// Taxonomy
function register_posgraduacao_taxonomy() {
    $labels = array(
        'name'              => _x( 'Modalidades', 'taxonomy general name', 'text_domain' ),
        'singular_name'     => _x( 'Modalidade', 'taxonomy singular name', 'text_domain' ),
        'search_items'      => __( 'Procurar Modalidade', 'text_domain' ),
        'all_items'         => __( 'Todas as Modalidades', 'text_domain' ),
        'parent_item'       => __( 'Modalidade Pai', 'text_domain' ),
        'parent_item_colon' => __( 'Modalidade Pai:', 'text_domain' ),
        'edit_item'         => __( 'Editar Modalidade', 'text_domain' ),
        'update_item'       => __( 'Atualizar Modalidade', 'text_domain' ),
        'add_new_item'      => __( 'Adicionar Nova Modalidade', 'text_domain' ),
        'new_item_name'     => __( 'Novo Nome de Modalidade', 'text_domain' ),
        'menu_name'         => __( 'Modalidades', 'text_domain' ),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
		'show_in_rest' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
		'rewrite' => array('slug' => 'modalidade-pos-graduacao')
    );
    register_taxonomy( 'modalidade_posgraduacao', 'pos-graduacao', $args );
}
add_action( 'init', 'register_posgraduacao_taxonomy', 0 );

?>
