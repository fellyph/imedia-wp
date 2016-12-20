<?php get_header(); ?>
  <section class="category-archive">
    <header class="category-description">
      <h1 class="title"><?php single_cat_title('Você está na categoria: '); ?></h1>
      <p class="description">
        <?php echo category_description(); ?>
      </p>
    </header>
    <?php while(have_posts()):the_post() ?>
      <?php get_template_part('templates/content','excerpt'); ?>
    <?php endwhile; ?>
  </section>
<?php get_footer(); ?>
