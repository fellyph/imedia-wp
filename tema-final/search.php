<?php get_header(); ?>
  <section class="page-search">
    <header class="search-header">
      <h1 class="title">Página de busca por: <?php echo get_search_query(); ?></h1>
    </header>

    <?php if(have_posts()): ?>
      <?php while (have_posts()): the_post(); ?>
       <?php get_template_part('templates/content','excerpt'); ?>
      <?php endwhile;  ?>
    <?php else: ?>
      <div class="no-result">
        <h2 class="title"> Nenhum resultado encontrado </h2>
        <p>Consulte novamente:</p>
        <?php get_search_form();  ?>
      </div>
    <?php endif; ?>
  </section>
<?php get_footer(); ?>
