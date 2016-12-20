<?php get_header(); ?>
  <article class="post-single">
    <?php while (have_posts()): the_post(); ?>
        <h2><?php the_title() ?></h2>
        <div class="content">
          <?php the_content() ?>
        </div>
    <?php endwhile; ?>
  </article>
<?php get_footer(); ?>
