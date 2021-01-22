<?php
/*
Template Name: Contenet With Sidebar
*/

get_header();
?>

<div class="wrapper-top">
    <div class="container custom-container padder" id="content" tabindex="-1">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="row">


          <div class="col-md-3 display-desktop">
            <div class="page-sidebar">
                <img class="f-image" src="<?php the_post_thumbnail_url();?>">
                <div class="sidebar-menu">
                  <h3>SIDEBAR MENU</h3>
                  <li>Menu item 1</li>
                  <li>Menu item 2</li>
                  <li>Menu item 3</li>
                  <li>Menu item 4</li>
                  <li>Menu item 5</li>
                  <li>Menu item 6</li>
                  <li>Menu item 7</li>
                  <li>Menu item 8</li>
                  <li>Menu item 9</li>

                </div>
            </div>
          </div>



        <div class="col-md-9">

          <?php if( have_rows('content_sections') ): ?>
          <?php while( have_rows('content_sections') ): the_row(); ?>

              <?php if( have_rows('flexible_content') ): ?>
                <?php while( have_rows('flexible_content') ): the_row(); ?>

                  <?php if( get_row_layout() == 'header_section' ): ?>

                    <div class="header-section safe_bg full_width" style="background-image: url('<?php the_sub_field('header_image');?>'); height:<?php the_sub_field('header_height');?>px;">
                      <div class="wrapper">
                        <?php the_sub_field('header_text');?>
                      </div>
                    </div>



                  <?php endif; ?>


                  <?php if( get_row_layout() == 'welcome_section' ): ?>
                    <div class="welcome-section padder_lg">
                      <div class="wrapper">
                        <div class="copy-wrap">
                          <?php the_sub_field('welcome_blurb');?>
                        </div>
                      </div>
                    </div>
                <?php endif; ?>

                <?php if( get_row_layout() == 'gallery_section' ): $images = get_sub_field('gallery');?>
                  <div class="galerry-section">
                    <div class="wrapper">
                      <div class="galerry-wrap">
                          <?php foreach( $images as $image ): ?>

                           <div class="gimage" style="background-image:url('<?php echo $image['url']?>')">

                           </div>

                          <?php endforeach; ?>
                      </div>
                    </div>
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
                    <div class="wysiwyg-section   <?php the_sub_field('class');?>">

                        <div class="wysiwyg-wrap">
                          <?php the_sub_field('wysiwyg');?>

                      </div>
                    </div>
                <?php endif; ?>


                <?php if( get_row_layout() == 'showcases' ): ?>

                    <div class="showcase-section gray_bg full_width padder">

                        <di class="row wrapper">
                          <?php while ( have_rows('showcase') ) : the_row(); ?>
                          <div class="col-md-3">
                            <div class="showcase">
                              <?php the_sub_field('column_maker');?>
                            </div>
                          </div>
                          <?php endwhile; ?>
                        </div>

                <?php endif; ?>


                <?php if( get_row_layout() == 'featured_content' ): ?>

                    <div class="featured-content-section <?php the_sub_field('size');?> <?php the_sub_field('left_or_right');?>">
                      <div class="wrapper">
                      <div class="row">

                        <div class="col-md-6" style="background-image: url('<?php the_sub_field('featured_image');?>');">
                        <div class="image"></div>
                        </div>

                        <div class="col-md-6">
                          <div class="copy">
                            <?php the_sub_field('featured_text');?>
                          </div>
                        </div>

                      </div>
                      </div>
                    </div>

                <?php endif; ?>

                <?php if( get_row_layout() == 'cta' ): ?>
                  <div class="cta-section full_width">
                    <div class="wrapper">
                      <?php the_sub_field('cta_text');?> <a href="<?php the_sub_field('button_link');?>"><?php the_sub_field('button_text');?></a>

                    </div>
                  </div>
              <?php endif; ?>


              <?php if( get_row_layout() == 'template_parts' ): ?>
                <div class="template-parts-section">
                  <div class="wrapper">
                    <?php the_sub_field('template');?>
                  </div>
                </div>
            <?php endif; ?>





          <?php endwhile; ?> <!-- for flexible -->
        <?php endif; ?> <!-- for flexible -->


          <?php endwhile; ?> <!-- for group -->
      <?php endif; ?> <!-- for group -->

       </div>

      </div> <!-- end row-->
    </div> <!-- end container -->
  </div> <!-- end wrpper-->

<?php endwhile; endif; ?>

<?php
get_footer();
