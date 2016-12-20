<article <?php post_class(); ?>>
  <div class="content">
    <?php
      $antes_titulo = '<h2 class="title">';
      $depois_titulo = '</h2>';
      the_title($antes_titulo, $depois_titulo);
      the_content();
    ?>
  </div>
</article>
