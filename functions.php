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
add_action('wp_head', 'add_analytics');
function add_analytics() { ?>
  <!-- <script>

  </script> -->
  <?php
}
