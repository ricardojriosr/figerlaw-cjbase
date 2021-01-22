<?php

 // Register Custom Navigation Walker
function register_navwalker(){
 require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'CJ Base' ),
   'footer' => __( 'Menu Footer' )
) );







?>
