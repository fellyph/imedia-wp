<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="http://fonts.googleapis.com/css?family=ABeeZee" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url')?>" rel="stylesheet">

    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <section class="main">
        <header class="main-header">
          <?php if(has_custom_logo()): ?>
            <div class="logo">
              <?php the_custom_logo(); ?>
            </div>
          <?php endif;?>
          <div class="text">
            <h1 class="title"><?php bloginfo('name'); ?></h1>
            <h3 class="sub-title"><?php bloginfo('description'); ?></h3>
          </div>
        </header>

        <?php if(has_header_image()): ?>
          <img src="<?php header_image(); ?>" class="header-image" />
        <?php endif; ?>

        <div class="main-menu">
          <?php wp_nav_menu(array('theme-location' => 'main', 'container' => 'nav', 'container_class' => 'menu')); ?>
          <?php get_search_form(); ?>
        </div>
