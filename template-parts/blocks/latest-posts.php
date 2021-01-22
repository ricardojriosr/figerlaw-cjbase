
<div class="row padder_lg anim_parent">
  <div class="text-center"><h2>FIEGER LAW <strong>NEWS</strong></h2></div>
  <?php
    $the_query = new WP_Query( 'posts_per_page=3' ); while ($the_query -> have_posts()) : $the_query -> the_post();
    ?>
    <div class="col-md-4">
      <div class="card-body-latest">

        <div class="date">
            <?php echo get_the_date( 'M j, Y' ); ?>
        </div>

        <a href="<?php the_permalink();?>" title="<?php the_title();?>" class="rm-link">Read More</a>

        <hr>

        <h4>
          <a href="<?php the_permalink();?>" title="<?php the_title();?>">
            <?php the_title();?>
          </a>
          <br/>

        </h4>


    </div><!-- end .card-body -->
    </div><!-- end .card -->
  <?php endwhile; wp_reset_postdata(); ?>
  <div class="text-center padder_sm_top">
   <a class="btn" href="/fieger-law-news/">VIEW ALL POSTS</a>
  </div>


</div><!-- end posts .row -->
