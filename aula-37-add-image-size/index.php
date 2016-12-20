<?php get_header(); ?>
        <div class="home posts">
          <?php  if (have_posts()):
                    while(have_posts()): the_post(); ?>
                      <?php get_template_part('content', 'thumb'); ?>
            <?php
                    endwhile;
                else:
            ?>
              <h2> Nenhum post encontrado </h2>
          <?php  endif; ?>
        </div>
<?php get_footer(); ?>
