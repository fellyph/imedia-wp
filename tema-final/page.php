<?php get_header(); ?>
  <section class="wrap-page">
  <?php
    while (have_posts()):the_post();
      get_template_part('templates/content','page');
    endwhile;
  ?>

  <?php
      $args = array(
        'post_type' => 'page',
        'posts_per_page' => -1,
        'post_parent' => $post->ID
      );
      $parent_pages = new WP_Query($args);

      while($parent_pages->have_posts()): $parent_pages->the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <div><?php the_content(); ?></div>
  <?php
    endwhile;
  ?>

  </section>
<?php get_footer(); ?>
