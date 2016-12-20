<?php get_header(); ?>
  <section class="page-search">
    <h1>Página de busca por: <?php echo get_search_query(); ?></h1>
    <?php if(have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
       <?php get_template_part('templates/content','excerpt'); ?>
      <?php endwhile;  ?>
    <?php else: ?>
      <h2> Nenhum resultado encontrado </h2>
      <?php get_search_form();  ?>
    <?php endif; ?>
  </section>
<?php get_footer(); ?>
