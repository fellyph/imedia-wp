<?php get_header(); ?>
        <div class="posts">
          <?php  if (have_posts()) {
                    while(have_posts()) {
                      the_post(); ?>
                      <article class="post">
                        <h2 class="title"><?php the_title(); ?></h2>
                        <div class="content">
                          <?php the_content(); ?>
                        </div>
                      </article>
            <?php   }
                } else { ?>
              <h2> Nenhum post encontrado </h2>
          <?php  } ?>
        </div>
<?php get_footer(); ?>
