<?php get_header(); ?>
  <section class="wrap-page box-layout">
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
        <div class="box">
          <h3 class="title"><?php the_title(); ?></h3>
          <div class="content"><?php the_content(); ?></div>
        </div>
  <?php
    endwhile;
    wp_reset_query();
  ?>
  <?php comments_template() ?>
  </section>
<?php get_footer(); ?>
