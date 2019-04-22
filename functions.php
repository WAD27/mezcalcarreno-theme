<?php
// mezcal custom
 function mezcal_scripts() {
   $parent_style = 'parent-style';
  wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'custom-child', get_stylesheet_directory_uri() . '/assets/css/mezcal.css', array($parent_style), '1.0.0' );
  wp_enqueue_script('img-script',get_stylesheet_directory_uri() . '/assets/js/imgLiquid-min.js', array( 'jquery' ));
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/js/mezcal.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'mezcal_scripts' );
//
function custom_excerpt( $length ) {
	return 32;
}
add_filter( 'excerpt_length', 'custom_excerpt', 999 );

// analytics
// add_action('wp_head', 'add_analytics');
function add_analytics() { ?>
  <!-- <script>

  </script> -->
  <?php
}
// custom posts
// Historia
function historia_mezcalcarreno() {

  $labels = array(
    'name'                => _x( 'Historias Mezcal Carreno', 'Post Type General Name', 'mezcalcarreno-theme' ),
    'singular_name'       => _x( 'Historia Mezcal Carreno', 'Post Type Singular Name', 'mezcalcarreno-theme' ),
    'menu_name'           => __( 'Historias Mezcal Carreno', 'mezcalcarreno-theme' ),
    'parent_item_colon'   => __( 'Historia Mezcal Carreno padre', 'mezcalcarreno-theme' ),
    'all_items'           => __( 'Todas las Historias Mezcal Carreno', 'mezcalcarreno-theme' ),
    'view_item'           => __( 'Ver Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'add_new_item'        => __( 'Agrega Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'add_new'             => __( 'Nuevo Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'edit_item'           => __( 'Edita Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'update_item'         => __( 'Actualiza Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'search_items'        => __( 'Busca Historia Mezcal Carreno', 'mezcalcarreno-theme' ),
    'not_found'           => __( 'No existe', 'mezcalcarreno-theme' ),
    'not_found_in_trash'  => __( 'No existe en la basura', 'mezcalcarreno-theme' )
  );

  $args = array(
    'label'               => __( 'Historias Mezcal Carreno', 'mezcalcarreno-theme' ),
    'description'         => __( 'Historias Mezcal Carreno', 'mezcalcarreno-theme' ),
    'labels'              => $labels,
    // 'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
    'supports'            => array( 'title', 'excerpt', 'thumbnail'),
    'menu_icon'           => 'dashicons-shield',
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 2,
    'can_export'          => true,
    'has_archive'         => true,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type('historias',$args);
}
add_action('init','historia_mezcalcarreno');
//
