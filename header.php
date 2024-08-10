<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>Learn WP Theme</title>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header>
      <section class="top-bar">
        <div class="container left">
          <div class="logo">
            <a href="<?= esc_url(home_url('/')); ?>"><span><?php bloginfo('name'); ?></span></a>
          </div>
        </div>
        <div class="container right">
          <nav class="main-menu">
            <?php wp_nav_menu(array('theme_location' => 'chess_main_menu')); ?>
        </div>
      </section>
    </header>