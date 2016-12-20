<?php get_header(); ?>
    <h2 class="title-section">Lançamento</h2>
    <div class="featured">
      <?php

        $featured_query = new WP_Query(array('cat' => 8 ));
        while($featured_query->have_posts()): $featured_query->the_post();
          get_template_part('templates/content', 'featured');
        endwhile;
      ?>

    </div>
    <h2 class="title-section">Últimos posts</h2>
    <div class="column-4 posts with-sidebar">
      <?php
            $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;

            $main_query = new WP_Query(array('cat' => -8, 'paged' => $paged, 'posts_per_page' => 3 ));
            if ($main_query->have_posts()):
                while($main_query->have_posts()): $main_query->the_post();
                  get_template_part('templates/content','box');
                endwhile;
            else:
        ?>
          <h2> Nenhum post encontrado </h2>
      <?php  endif; ?>
    </div>
  <?php get_sidebar(); ?>
  <nav class="pagination">
    <?php posts_nav_link(' ', 'Posts recentes', 'Posts anteriores') ?>
  </nav>
<?php get_footer(); ?>
