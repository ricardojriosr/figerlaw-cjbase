<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cj_-_Base
 */

?>
</div><!-- #page -->
<div class="container-fluid">
	<div class="footer-m-wrap padder_sm">
		<h5 class="visable-mobile">Quick links</h5>
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</div>
</div>

	<footer id="colophon" class="site-footer">
		<div class="footer-content padder_lg">
			<div class="container-fluid">
				<div class="row">

				<div class="col-md-4 padder_sm">
					<img class="footer-logo" src="<?php the_field('logo','option');?>"><br>
					Michigan Personal Injury Attorney<br>
					© All Rights Reserved
				</div>

				<div class="col col-xs-3">
					<h4>Office Location</h4>
					<?php the_field('address', 'option');?><br>
				</div>

				<div class="col col-xs-3">
					<h4>Contact Us</h4>
					<?php the_field('phone','option');?>
				</div>

				<div class="col-md-2 padder_sm">
					<?php the_field('social','option');?>

						<!-- <div class="address">
							Phone:<a onclick="ga('PhoneCalls','FooterClick');" href="tel:<?php// the_field('phone', 'option');?>"> <?php// the_field('phone', 'option');?></a><br>
								<div class="social-icons">
							<!<a  href="/" target="_blank"><img src="/wp-content/uploads/2020/09/instagram.svg"></a> -->
							<!-- <a href="#" target="_blank"><img src="/wp-content/uploads/2020/09/facebook-square.svg"></a> -->
						</div>
				</div>
			  </div>


		</div>
			</div>
	</div>

		<div class="site-info">
			<div class="row">

			<div class="col-md-9">
			<p>The information on this website is for general information purposes only. Nothing on this site should be taken as legal advice for any individual case or situation.<br>
			This information is not intended to create, and receipt or viewing does not constitute, an attorney-client relationship.</p></div>
		<div class="col-md-3 text-center">	<img src="/wp-content/themes/cj-base/img/scorpion-logo.png"></div>
		</div><!-- .site-info -->
	</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>

</body>
</html>
