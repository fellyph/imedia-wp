<article <?php post_class() ?>>
  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="content">
    <?php the_excerpt(); ?>
  </div>
</article>
