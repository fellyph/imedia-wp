<article <?php post_class('box'); ?>>
  <?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-home' );
    if ($image) : ?>
    <img src="<?php echo $image[0]; ?>" class="thumb-box" />
  <?php endif; ?>
  <div class="content">
    <h2 class="title"><a href="<?php the_permalink();  ?>"> <?php the_title(); ?></a></h2>
    <?php the_excerpt(); ?>
  </div>
</article>
