<?php get_header(); ?>
    <div class="home posts with-sidebar">
      <?php  if (have_posts()):
                while(have_posts()): the_post();
                  if(has_post_format('video')):
                    get_template_part('content', 'video');
                  else:
                    get_template_part('content', 'thumb');
                  endif;
                endwhile;
            else:
        ?>
          <h2> Nenhum post encontrado </h2>
      <?php  endif; ?>
    </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
