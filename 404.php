<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Almiron_Digital_Group_-_Base
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title">404<br><b>AW SHUCKS!</b><br></h1>
				<h3><?php esc_html_e( 'That page can&rsquo;t be found.', 'almiron-digital-group-base' ); ?></h3>
			</header><!-- .page-header -->

	
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
