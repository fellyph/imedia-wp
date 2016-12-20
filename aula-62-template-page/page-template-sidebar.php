<?php
  /* Template Name: Página com sidebar */
get_header(); ?>
<section class="wrap-page with-sidebar">
  <?php
    while (have_posts()):the_post();
      get_template_part('templates/content','page');
    endwhile;
  ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
