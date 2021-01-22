<?php
function cj_base_scripts() {

  wp_enqueue_style( 'cj-base-style', get_stylesheet_uri(), array(), _S_VERSION );
  wp_style_add_data( 'cj-base-style', 'rtl', 'replace' );
  //	wp_enqueue_style ('theme-style', get_template_directory_uri() .'/inc/boostrap-grid.css');

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'cj-base-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'cj-base-main-js', get_template_directory_uri() . '/js/main.js',  array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
	}
}


add_action( 'wp_enqueue_scripts', 'cj_base_scripts' );

?>
