<?php
/*
Template name: Sans Slider
*/

 get_header(); ?>

<div class="container my-4">
  <div class="row">

    <div class="col-sm-12 blog-main">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="blog-post">
        <h4 class="blog-post-title text-center">
          <?php the_title(); ?>
        </h4>

        <?php the_content(); ?>
      </div><!-- /.blog-post -->
      <?php endwhile; ?>
      <?php else : ?>
      <p><?php __('No Page Found'); ?></p>
      <?php endif; ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->
  

</div><!-- /.container -->


<?php get_footer(); ?>