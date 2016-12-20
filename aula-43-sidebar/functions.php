<?php

add_theme_support('post-thumbnails');
add_image_size('thumb-home', 250, 250, array('center','center'));

register_sidebar(
              array(
                'name' => 'Sidebar Geral',
                'id' => 'side-geral',
                'before_widget' => '<div class="widget">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="title">',
                'after_title' => '</h3>'
              )
              );
