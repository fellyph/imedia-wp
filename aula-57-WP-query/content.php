<article <?php post_class(); ?>>
  <div class="content">
    <?php
      if(is_single()):
        $antes_titulo = '<h2 class="title">';
        $depois_titulo = '</h2>';
      else:
        $antes_titulo = '<h2 class="title"> <a href="'.get_the_permalink().'">';
        $depois_titulo = '</a></h2>';
      endif;
    ?>
    <?php
      the_title($antes_titulo, $depois_titulo);
      the_content();
    ?>
    <div class="info">
      <?php the_time('d / m / y ') ?> - <?php the_category(','); ?> - <?php the_author_posts_link(); ?>
    </div>
  </div>
</article>
