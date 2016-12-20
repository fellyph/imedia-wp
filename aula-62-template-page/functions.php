<?php


$args = array('width' => 960, 'height' => 250);

add_theme_support('post-thumbnails');
add_theme_support('custom-background');
add_theme_support('custom-header', $args);
add_theme_support('custom-logo');
add_theme_support('post-formats', array('video'));

add_image_size('thumb-home', 250, 250);

register_nav_menu('main','Menu Principal');

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

register_sidebar(
    array(
      'name' => 'Sidebar do footer',
      'description' => 'Essa sidebar será carregada na região do footer',
      'id' => 'side-footer'
    )
);
