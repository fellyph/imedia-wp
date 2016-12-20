<article <?php post_class('content-thumb'); ?>>
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

  <div class="row">
    <?php the_post_thumbnail('thumb-home', array('class' => 'thumb-post')); ?>
    <div class="text">
      <?php the_excerpt(); ?>
    </div>
  </div>
  <footer class="post-info">
    <time class="time-post"><?php the_time('d / m / y') ?></time>
    <span class="info"><?php the_category(','); ?></span>
    <span class="info"><?php the_author_posts_link(); ?></span>
  </footer>
</article>
