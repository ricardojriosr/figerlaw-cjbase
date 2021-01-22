<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package AO_Base
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row">
		<div class="col-md-3">
			<h1>Sidebar</h1>
		</div>
		<div class="col-md-9">
	<header class="entry-header">
		<h1>
			<?php the_title(); ?>
			<br/>
		</h1>
		<!-- <small class="date">
			<em>
				<?php// echo get_the_date( 'F j, Y' ); ?>
			</em>
		</small> -->

	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'aobase' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>
	</div><!-- .entry-content -->
	</div>



	</div>

	<footer class="entry-footer text-center">
		<hr>
		<div style="display:inline-block;"><?php echo do_shortcode('[ssba]'); ?></div>
		<hr>
	</footer><!-- .entry-footer -->



</article><!-- #post-## -->
