<?php

function load_assets(){
	wp_enqueue_style( "themeStyle", get_template_directory_uri()."/css/theme-Style.css");
	}
add_action("wp_enqueue_scripts","load_assets");

// Register Custom Post Type
function Logement() {

	$labels = array(
		'name'                  => _x( 'Logements', 'Post Type General Name', 'Logement' ),
		'singular_name'         => _x( 'Logement', 'Post Type Singular Name', 'Logement' ),
		'menu_name'             => __( 'Logement', 'Logement' ),
		'name_admin_bar'        => __( 'Logement', 'Logement' ),
		'archives'              => __( 'Logement', 'Logement' ),
		'attributes'            => __( 'Logement', 'Logement' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Logement' ),
		'all_items'             => __( 'tout les logments', 'Logement' ),
		'add_new_item'          => __( 'ajouter nouveau logement', 'Logement' ),
		'add_new'               => __( 'ajouter logment', 'Logement' ),
		'new_item'              => __( 'nouveau logement', 'Logement' ),
		'edit_item'             => __( 'modifier un logement', 'Logement' ),
		'update_item'           => __( 'mettre à jour le logement', 'Logement' ),
		'view_item'             => __( 'voir le logment', 'Logement' ),
		'view_items'            => __( 'voir les logement', 'Logement' ),
		'search_items'          => __( 'chercher un logement', 'Logement' ),
		'not_found'             => __( 'Not found', 'Logement' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Logement' ),
		'featured_image'        => __( 'Featured Image', 'Logement' ),
		'set_featured_image'    => __( 'Set featured image', 'Logement' ),
		'remove_featured_image' => __( 'Remove featured image', 'Logement' ),
		'use_featured_image'    => __( 'Use as featured image', 'Logement' ),
		'insert_into_item'      => __( 'Insert into item', 'Logement' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Logement' ),
		'items_list'            => __( 'Items list', 'Logement' ),
		'items_list_navigation' => __( 'Items list navigation', 'Logement' ),
		'filter_items_list'     => __( 'Filter items list', 'Logement' ),
	);
	$args = array(
		'label'                 => __( 'Logement', 'Logement' ),
		'description'           => __( 'Logement', 'Logement' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'LogementTaxonomie' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-home',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Logement', $args );
  add_theme_support( 'post-thumbnails' );
}
add_action( 'init', 'Logement', 0 );

// Register Custom Post Type
function Ville() {

	$labels = array(
		'name'                  => _x( 'Villes', 'Post Type General Name', 'Ville' ),
		'singular_name'         => _x( 'Ville', 'Post Type Singular Name', 'Ville' ),
		'menu_name'             => __( 'Ville', 'Ville' ),
		'name_admin_bar'        => __( 'Ville', 'Ville' ),
		'archives'              => __( 'Ville', 'Ville' ),
		'attributes'            => __( 'Ville', 'Ville' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Ville' ),
		'all_items'             => __( 'tout les villes', 'Ville' ),
		'add_new_item'          => __( 'ajouter nouvelle ville', 'Ville' ),
		'add_new'               => __( 'ajouter ville', 'Ville' ),
		'new_item'              => __( 'nouvelle ville', 'Ville' ),
		'edit_item'             => __( 'modifier une ville', 'Ville' ),
		'update_item'           => __( 'mettre à jour la ville', 'Ville' ),
		'view_item'             => __( 'voir la ville', 'Ville' ),
		'view_items'            => __( 'voir les villes', 'Ville' ),
		'search_items'          => __( 'chercher une ville', 'Ville' ),
		'not_found'             => __( 'Not found', 'Ville' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Ville' ),
		'featured_image'        => __( 'Featured Image', 'Ville' ),
		'set_featured_image'    => __( 'Set featured image', 'Ville' ),
		'remove_featured_image' => __( 'Remove featured image', 'Ville' ),
		'use_featured_image'    => __( 'Use as featured image', 'Ville' ),
		'insert_into_item'      => __( 'Insert into item', 'Ville' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Ville' ),
		'items_list'            => __( 'Items list', 'Ville' ),
		'items_list_navigation' => __( 'Items list navigation', 'Ville' ),
		'filter_items_list'     => __( 'Filter items list', 'Ville' ),
	);
	$args = array(
		'label'                 => __( 'Ville', 'Ville' ),
		'description'           => __( 'Ville', 'Ville' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'LogementTaxonomie' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-multisite',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Ville', $args );

}
add_action( 'init', 'Ville', 0 );

// Register Custom Taxonomy
function LogementTaxonomie() {

	$labels = array(
		'name'                       => _x( 'LogementTaxonomies', 'Taxonomy General Name', 'LogementTaxonomie' ),
		'singular_name'              => _x( 'LogementTaxonomie', 'Taxonomy Singular Name', 'LogementTaxonomie' ),
		'menu_name'                  => __( 'Catégories de logement', 'LogementTaxonomie' ),
		'all_items'                  => __( 'toutes les catégories', 'LogementTaxonomie' ),
		'parent_item'                => __( 'Parent Item', 'LogementTaxonomie' ),
		'parent_item_colon'          => __( 'Parent Item:', 'LogementTaxonomie' ),
		'new_item_name'              => __( 'nouvelle Catégories de logement', 'LogementTaxonomie' ),
		'add_new_item'               => __( 'ajouter une nouvelle catégorie', 'LogementTaxonomie' ),
		'edit_item'                  => __( 'modifier une catégorie', 'LogementTaxonomie' ),
		'update_item'                => __( 'mettre à jour', 'LogementTaxonomie' ),
		'view_item'                  => __( 'voir catégorie', 'LogementTaxonomie' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'LogementTaxonomie' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'LogementTaxonomie' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'LogementTaxonomie' ),
		'popular_items'              => __( 'Popular Items', 'LogementTaxonomie' ),
		'search_items'               => __( 'Search Items', 'LogementTaxonomie' ),
		'not_found'                  => __( 'Not Found', 'LogementTaxonomie' ),
		'no_terms'                   => __( 'No items', 'LogementTaxonomie' ),
		'items_list'                 => __( 'Items list', 'LogementTaxonomie' ),
		'items_list_navigation'      => __( 'Items list navigation', 'LogementTaxonomie' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'LogementTaxonomie', array( 'Logement' ), $args );

}
add_action( 'init', 'LogementTaxonomie', 0 );


?>
