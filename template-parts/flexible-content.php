<?php

// check if the flexible content field has rows of data
if( have_rows('sections') ):

     // loop through the rows of data
    while ( have_rows('sections') ) : the_row();

      if (!get_sub_field('disable_section')): ?>

        <div class="wrapper <?php echo 'wrapper_' . get_row_layout() . ' '; echo 'wrapper_' . get_row_index() . ' '; echo (count(get_field('sections')) == get_row_index() ? 'last ' : ''); echo (1 == get_row_index() ? 'first ' : ''); the_sub_field('classes'); ?>"
          id="<?php the_sub_field('id'); ?>"
          style="background-color: <?php the_sub_field('background_color'); ?>; background-image: url(<?php echo get_sub_field('background_image'); ?>); color: <?php the_sub_field('text_color'); ?>; ">
          <div class="container">
          <?php if( get_row_layout() == 'simple_text_and_headers' ): ?>

          	<h2><?php the_sub_field('h2'); ?></h2>
          	<h3><?php the_sub_field('h3'); ?></h3>
          	<p><?php the_sub_field('text'); ?></p>


          <?php elseif( get_row_layout() == 'latest_news' ): ?>

            <?php if (get_sub_field('h2')) { ?><h2><?php the_sub_field('h2'); ?></h2><?php } ?>
          	<?php get_template_part('template-parts/news-wrapper'); ?>

          <?php elseif( get_row_layout() == 'columns' ):
            $columnId = get_row_index();
            $numColumns = get_sub_field('number_of_columns');?>

            <h2><?php the_sub_field('h2'); ?></h2>
            <div class="columns columns_<?php echo $columnId; ?>"><?php the_sub_field('p'); ?></div>

            <style>
              .columns_<?php echo $columnId; ?> {column-count: <?php the_sub_field('number_of_columns'); ?>;}
              <?php if ($numColumns > 1): ?>
              @media (max-width: 767px) {.columns_<?php echo $columnId; ?> {column-count: 1;}}
              @media (min-width: 768px) and (max-width: 1199px) {.columns_<?php echo $columnId; ?> {column-count: 2;}}
              <?php endif; ?>
            </style>

          <?php elseif( get_row_layout() == 'wysiwyg_editor' ): ?>


            <div><?php the_sub_field('wysiwyg_content'); ?></div>

          <?php elseif( get_row_layout() == 'share_links' ): ?>
            <?php if( have_rows('share_links_group') ): ?>
              <div class="share_links">
                <?php while( have_rows('share_links_group') ): the_row(); ?>

                  <?php $share_link = urlencode(get_sub_field('share_another_page') ? get_sub_field('another_page_url') : get_permalink()) ;?>

                  <?php if (get_sub_field('share_on_facebook')): ?>
                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $share_link; ?>">
                      <i class="fa fa-facebook"></i>
                    </a>
                  <?php endif; ?>

                  <?php if (get_sub_field('share_on_twitter')): ?>
                    <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php echo urlencode(get_sub_field('twitter_text')); ?>&url=<?php echo $share_link; ?>">
                      <i class="fa fa-twitter"></i>
                    </a>
                  <?php endif; ?>

                  <?php if (get_sub_field('share_on_google_plus')): ?>
                    <a target="_blank" href="https://plus.google.com/share?url=<?php echo $share_link; ?>">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  <?php endif; ?>

                  <?php if (get_sub_field('share_on_linkedin')): ?>
                    <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $share_link;
                      if (get_sub_field('linkedin_title_optional')) echo '&title=' . urlencode(get_sub_field('linkedin_title_optional'));
                      if (get_sub_field('lindedin_summary_optional')) echo '&summary=' . urlencode(get_sub_field('lindedin_summary_optional'));
                      if (get_sub_field('lindedin_source_optional')) echo '&source=' . urlencode(get_sub_field('lindedin_source_optional'));
                      ?>">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  <?php endif; ?>

                  <?php if (get_sub_field('share_on_pinterest')): ?>
                    <a target="_blank" href="https://www.pinterest.com/pin/create/button/?url=<?php echo $share_link;
                      if (get_sub_field('pinterest_image')) echo '&media=' . urlencode(get_sub_field('pinterest_image'));
                      if (get_sub_field('pinterest_description_optional')) echo '&description=' . urlencode(get_sub_field('pinterest_description_optional'));
                      ?>">
                      <i class="fa fa-pinterest"></i>
                    </a>
                  <?php endif; ?>

                  <?php if (get_sub_field('share_with_email')): ?>
                    <a href="mailto:?<?php
                    if (get_sub_field('email_subject')) echo '&subject=' . (get_sub_field('email_subject'));
                    if (get_sub_field('email_body')) echo '&body=' . (get_sub_field('email_body'));
                    ?>">
                      <i class="fa fa-envelope"></i>
                    </a>
                  <?php endif; ?>

                <?php endwhile; ?>
              </div>

            <?php endif; ?>

          <?php endif; ?>

          <?php the_sub_field('custom_stylescript'); ?>
        </div><!--.container -->
      </div><!-- .wrapper -->


      <?php endif;

    endwhile;

else :?>
    <!-- no layouts found -->
<?php endif; ?>
