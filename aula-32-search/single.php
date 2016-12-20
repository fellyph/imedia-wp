<?php get_header(); ?>
  <article class="post-single">
    <?php while (have_posts()):the_post(); ?>
      <?php get_template_part('content'); ?>
    <?php endwhile; ?>
  </article>
<?php get_footer(); ?>
