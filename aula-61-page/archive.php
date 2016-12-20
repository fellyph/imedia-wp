<?php get_header(); ?>
  <a href="<?php echo home_url('/'); ?>">Voltar</a>
  <?php
    if (is_author()):
      $tipo = "Autor";
    elseif (is_category()):
      $tipo = "Categoria";
    else:
      $tipo = "Geral";
    endif;
  ?>


  <h1>Arquivo: <?php echo $tipo; ?></h1>
  <?php while(have_posts()):the_post() ?>
    <?php get_template_part('templates/content','excerpt'); ?>
  <?php endwhile; ?>
<?php get_footer(); ?>
