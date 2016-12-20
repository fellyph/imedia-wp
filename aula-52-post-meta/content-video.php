<article <?php post_class(); ?>>
    <?php if(get_post_meta(get_the_ID(), 'id-youtube', true)): ?>
      <iframe width="650" height="315" src="https://www.youtube.com/embed/<?php echo get_post_meta(get_the_ID(), 'id-youtube', true); ?>" frameborder="0" allowfullscreen></iframe>
    <?php endif; ?>
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

    <div class="content">
      <?php the_content('Leia +'); ?>
    </div>

</article>
