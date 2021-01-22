<?php
/**
 * CJ Base Theme - Base functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cj_base-_Base
 */



# SITE ADJUSTMENTS
require_once( __DIR__ . '/inc/nav.php');

# ACF OPTIONS PAGES
require_once( __DIR__ . '/inc/acf-options-pages.php');

require_once( __DIR__ . '/template-parts/blocks/blocks.php');

# Enqueue Custom Scripts
require_once( __DIR__ . '/inc/enqueue-scripts.php');

# HELPER FUNCTIONS
require_once( __DIR__ . '/inc/helpers.php');

# NAVWALKER
require_once(__DIR__ . '/inc/wp-bootstrap-mega-navwalker.php');

# REGISTER SLIDERS
register_new_royalslider_files(2);
register_new_royalslider_files(3);
register_new_royalslider_files(4);
register_new_royalslider_files(5);
register_new_royalslider_files(6);
register_new_royalslider_files(7);
