<?php get_header(); ?>
  <article class="post-single">
    <?php while (have_posts()):the_post(); ?>
      <?php get_template_part('templates/content'); ?>
    <?php endwhile; ?>
  </article>
  <nav class="pagination">
    <?php previous_post_link('%link','Post anterior: %title'); ?>
    <?php next_post_link('%link','Próximo post: %title'); ?>
  </nav>
<?php get_footer(); ?>
