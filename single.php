<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Almiron_Digital_Group_-_Base
 */

get_header();
?>

<div class="header-news-single padder" >
  
  
</div>

	<main id="primary" class="site-main">
		<div class="container padder">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'almiron-digital-group-base' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'almiron-digital-group-base' ) . '</span> <span class="nav-title">%title</span>',
				)
			);


		endwhile; // End of the loop.
		?>
	</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
