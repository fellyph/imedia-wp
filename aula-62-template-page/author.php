<?php get_header(); ?>
  <section class="author-archive">
    <header class="profile">
      <h1> Página do autor: <?php the_author_meta('display_name'); ?></h1>
      <?php echo get_avatar(get_the_author_meta('ID')); ?>
      <?php the_author_meta('description'); ?>
    </header>

    <?php while(have_posts()):the_post() ?>
      <?php get_template_part('templates/content','excerpt'); ?>
    <?php endwhile; ?>
  </section>
<?php get_footer();?>
