<?php get_header(); ?>

<div class="container my-4">
  <div class="row">

    <div class="col-sm-12 blog-main">

      <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
      <div class="blog-post">
         <?php the_content(); ?>
      </div><!-- /.blog-post -->
      <?php endwhile; ?>
      <?php else : ?>
      <p><?php __('No Page Found'); ?></p>
      <?php endif; ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

  <div class="diapo"><?php echo do_shortcode('[smartslider3 slider="2"]');?><div class="year"></div></div>
  

</div><!-- /.container -->


<?php get_footer(); ?>