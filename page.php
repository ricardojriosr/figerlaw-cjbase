<?php
/*
Template Name: Flexible Content
*/

get_header();
?>

<div class="wrapper-top">
    <div class="container" id="content" tabindex="-1">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="row align-items-center">
          <?php if( have_rows('content_sections') ): ?>
          <?php while( have_rows('content_sections') ): the_row(); ?>

              <?php if( have_rows('flexible_content') ): ?>
                <?php while( have_rows('flexible_content') ): the_row(); ?>


                  <?php if( get_row_layout() == 'practice-areas' ): ?>
                    <div class="gray_bg full_width padder practice-areas">
                         <div class="container">
                             <?php get_template_part('template-parts/blocks/practice-areas'); ?>
                         </div>
                    </div>
                 <?php endif; ?>



                 <?php if( get_row_layout() == 'cta-form' ): ?>
                   <div class="cta-form full_width padder">
                        <div class="container-fluid line-background">
                           <?php get_template_part('template-parts/blocks/cta-form-small'); ?>
                        </div>
                   </div>
                <?php endif; ?>

                <?php if( get_row_layout() == 'testimonial-slider' ): ?>
                  <div class="full_width padder blue_bg">
                    <?php get_template_part('template-parts/blocks/testimonial-slider'); ?>
                 </div>
                <?php endif; ?>



                <?php if( get_row_layout() == 'cta' ): ?>
                  <?php get_template_part('template-parts/blocks/cta'); ?>
                <?php endif; ?>



                <?php if( get_row_layout() == 'latest-posts' ): ?>
                  <?php get_template_part('template-parts/blocks/latest-posts'); ?>
                <?php endif; ?>


                <?php if( get_row_layout() == 'attorney-slider' ): ?>
                  <div class="full_width padder">
                    <?php get_template_part('template-parts/blocks/attorney-slider'); ?>
                 </div>
                <?php endif; ?>




                <?php if( get_row_layout() == 'featured-video' ): ?>
                  <div class="full_width  featured-video">
                    <?php get_template_part('template-parts/blocks/featured-video'); ?>
                 </div>
                 <?php endif; ?>


                 <?php if( get_row_layout() == 'code' ): ?>
                    <div class="custom-section   <?php the_sub_field('class');?>">

                        <div class="wrap">
                          <?php the_sub_field('custom_code');?>
                        </div>

                    </div>
                <?php endif; ?>

                <?php if( get_row_layout() == 'wysiwyg_content' ): ?>

                  <div class="wysiwyg-section <?php the_sub_field('section_option'); ?> <?php the_sub_field('class');?>" style="background-image: url('<?php the_sub_field('bg_image');?>');">
                      <div class="<?php the_sub_field('wrapper_option'); ?>">
                        <div class="row">
                          <?php the_sub_field('wysiwyg');?>
                        </div>
                    </div>
                  </div>

              <?php endif; ?>

              <?php if( get_row_layout() == 'columns' ): ?>

                  <div class="columns-section padder">
                      <div class="row wrapper">
                        <?php while ( have_rows('column_maker') ) : the_row(); ?>
                        <div class="col-md">
                          <div class="column-wrap">
                            <?php the_sub_field('column');?>
                          </div>
                           <?php endwhile; ?>
                        </div>
                      </div>
                  </div>

              <?php endif; ?>


              <?php if( get_row_layout() == 'testimonials' ): ?>

                  <div class="testimonials full_width gray_bg padder">
                    <div class="container">
                      <div class="text-center"><blue><h1>PEOPLE LOVE <b>FIEGER LAW</b></h1><br></div>
                        <div class="row wrapper">
                         <?php while ( have_rows('testimonial') ) : the_row(); ?>

                          <div class="col-md-4">
                            <div class="testimonial-wrap">
                                <div class="content">
                                  <h2><?php the_sub_field('title');?></h2>
                                  <p><?php the_sub_field('content');?></p>
                                </div>

                                <span>
                                  <?php the_sub_field('name');?>
                                </span>
                            </div>
                          </div>

                         <?php endwhile; ?>

                      </div>
                    </div>
                  </div>

              <?php endif; ?>












                <?php endwhile; ?> <!-- for flexible -->
                    <?php endif; ?> <!-- for flexible --


          <?php endwhile; ?> <!-- for group --
      <?php endif; ?> <!-- for group --

        </div>
    </div><!-- .container end -->
</div><!-- .wrapper end -->

    </div>

<?php endwhile; endif; ?>

<?php
get_footer();
