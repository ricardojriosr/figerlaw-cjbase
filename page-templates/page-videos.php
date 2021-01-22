<?php
/*
Template Name: Video Page
*/

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="header-news padder">


</div>

<div class="wrapper inner-container padder">

  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
      <div class="row">

        <div class="col-md-3">
          <h2 class="white blue_bg text-center">CATEGORIES</h2>
        </div>

        <div class="col-md-9">
        <?php the_content(); ?>

        <?php get_template_part('template-parts/video-wrapper'); ?>

        </div>

      </div>
    </div><!-- .container end -->

</div><!-- .wrapper end -->

<?php get_template_part('template-parts/cta'); ?>


<?php
get_footer();
