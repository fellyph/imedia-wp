<article <?php post_class(); ?>>
    <?php the_content('Leia +'); ?>
    <?php
      if(is_single()):
        $antes_titulo = '<h2 class="title">';
        $depois_titulo = '</h2>';
      else:
        $antes_titulo = '<h2 class="title"> <a href="'.get_the_permalink().'">';
        $depois_titulo = '</a></h2>';
      endif;
    ?>
    <?php the_title($antes_titulo, $depois_titulo); ?>
</article>
