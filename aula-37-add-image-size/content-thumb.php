<article <?php post_class(); ?>>
  <time class="time-post">
    <?php the_time('d / m / y') ?>
  </time>
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
    <?php the_title($antes_titulo, $depois_titulo); ?>
    <?php the_post_thumbnail('medium', array('class' => 'thumb-post')); ?>
    <?php the_content('Leia +'); ?>

    <div class="info">
      <?php the_category(','); ?> - <?php the_author_posts_link(); ?>
    </div>
  </div>
</article>
