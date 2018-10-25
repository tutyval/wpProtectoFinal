<?php
/* registro de funciones css*/

function dl_image_sizes( $sizes ) {
	$add_sizes = array(
		'slideshow'		=> __( 'Tamaño del slideshow' ),
		'custom_logo'	=> __( 'Tamaño personalizado del logo' )
	);
	return array_merge( $sizes, $add_sizes );
}

if ( function_exists( 'add_theme_support' ) ) {
	add_image_size( 'post', 400, 400, true );			// Personalización del tamaño del slideshow
	add_image_size( 'articulo', 800, 600, true );		// Personalización del tamaño del logo
	add_filter( 'image_size_names_choose', 'dl_image_sizes' );
}

function register_enqueue_style() {
	$theme_data = wp_get_theme();

	/* Registrando estilos */
	wp_register_style('tabla', get_parent_theme_file_uri('/assets/css/tabla.css'), null, $theme_data->get( 'Version' ), 'screen' );
	wp_register_style('Bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.3.1/css/all.css'
		);

	/* Enqueue estilos */

	
	
	wp_enqueue_style('Bootstrap');
	wp_enqueue_style('fontawesome');
	wp_enqueue_style('tabla');

}

add_action( 'wp_enqueue_scripts', 'register_enqueue_style');


/* registro de funciones js*/

function register_enqueue_scripts () {
	$theme_data = wp_get_theme();

	wp_deregister_script( 'jquery' );
	wp_deregister_script( 'jquery-migrate' );

	/* Registrando scripts */

	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', true );
	wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true );
	wp_register_script('bootstrapcdn', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', array('jquery'), '4.1.1', true );
	wp_register_script( 'scripts', get_theme_file_uri('assets/js/scripts.js'), array('jquery'), null, true );

	/* Enqueue script */
	
	wp_enqueue_script('jquery');
	wp_enqueue_script('popper');
	wp_enqueue_script('bootstrapcdn');
	wp_enqueue_script('scripts');
	
}

add_action( 'wp_enqueue_scripts', 'register_enqueue_scripts' );


/* personalizacion de post-1*/

function inicio_post_type() {

	$labels = array(
		'name'                  => _x( 'principales', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Principal', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post de Inicio', 'text_domain' ),
		'name_admin_bar'        => __( 'Post-inicio', 'text_domain' ),
		'archives'              => __( 'Archivos', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Articulo Principal', 'text_domain' ),
		'all_items'             => __( 'Todos los items', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo items', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualizacion', 'text_domain' ),
		'view_item'             => __( 'Ver item', 'text_domain' ),
		'view_items'            => __( 'ver items', 'text_domain' ),
		'search_items'          => __( 'Busqueda', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Principal', 'text_domain' ),
		'description'           => __( 'post de la pagina principal', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Home', $args );

}
add_action( 'init', 'inicio_post_type', 0 );

add_theme_support( 'post-thumbnails' ); 


// Post de arte callejero
function Arte_post_type() {

	$labels = array(
		'name'                  => _x( 'murales', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Mural', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post de Arte', 'text_domain' ),
		'name_admin_bar'        => __( 'Post-Arte', 'text_domain' ),
		'archives'              => __( 'Archivos', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Articulo Principal', 'text_domain' ),
		'all_items'             => __( 'Todos los items', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo items', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualizacion', 'text_domain' ),
		'view_item'             => __( 'Ver item', 'text_domain' ),
		'view_items'            => __( 'ver items', 'text_domain' ),
		'search_items'          => __( 'Busqueda', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Mural', 'text_domain' ),
		'description'           => __( 'post de la pagina arte callejero', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Arte', $args );

}
add_action( 'init', 'Arte_post_type', 0 );

add_theme_support( 'post-thumbnails' );

// Post de Arquitectura

function Arquitectura_post_type() {

	$labels = array(
		'name'                  => _x( 'Estructuras', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Estructura', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post de Arquitectura', 'text_domain' ),
		'name_admin_bar'        => __( 'Post-Arquitectura', 'text_domain' ),
		'archives'              => __( 'Archivos', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Articulo Principal', 'text_domain' ),
		'all_items'             => __( 'Todos los items', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo items', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualizacion', 'text_domain' ),
		'view_item'             => __( 'Ver item', 'text_domain' ),
		'view_items'            => __( 'ver items', 'text_domain' ),
		'search_items'          => __( 'Busqueda', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Estructura', 'text_domain' ),
		'description'           => __( 'post de la pagina arquitectura de las estructuras con valor de la comuna', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Arquitectura-post', $args );

}
add_action( 'init', 'Arquitectura_post_type', 0 );

add_theme_support( 'post-thumbnails' );

// post de Gastronomia

function Gastronomia_post_type() {

	$labels = array(
		'name'                  => _x( 'Comidas', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Comida', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post de Gastronomia', 'text_domain' ),
		'name_admin_bar'        => __( 'Post-Gastronomia', 'text_domain' ),
		'archives'              => __( 'Archivos', 'text_domain' ),
		'attributes'            => __( 'Atributos', 'text_domain' ),
		'parent_item_colon'     => __( 'Articulo Principal', 'text_domain' ),
		'all_items'             => __( 'Todos los items', 'text_domain' ),
		'add_new_item'          => __( 'Agregar nuevo items', 'text_domain' ),
		'add_new'               => __( 'Agregar Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Elemento de actualizacion', 'text_domain' ),
		'view_item'             => __( 'Ver item', 'text_domain' ),
		'view_items'            => __( 'ver items', 'text_domain' ),
		'search_items'          => __( 'Busqueda', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Comida', 'text_domain' ),
		'description'           => __( 'post de la pagina de gastronomia', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-gallery',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Gastronomia', $args );

}
add_action( 'init', 'Gastronomia_post_type', 0 );

add_theme_support( 'post-thumbnails' );

?>