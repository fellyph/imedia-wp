<article <?php post_class('new'); ?>>
  <?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumb-home' );
    if ($image) : ?>
    <img src="<?php echo $image[0]; ?>" class="thumb-box" />
  <?php endif; ?>
  <div class="content">
      <h2 class="title"><?php the_title(); ?></h2>
      <?php the_content(); ?>
  </div>
</article>
