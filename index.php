<?php get_header(); ?>

<img src="<?php header_image(); ?>" height="<?= esc_attr(get_custom_header()->height); ?>" width="<?= esc_attr(get_custom_header()->width); ?>" alt="" />

<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <?php
      $hero_title = get_theme_mod('set_hero_title', __('Please, type some title', 'chess'));
      $hero_subtitle = get_theme_mod('set_hero_subtitle', __('Please, type some subtitle', 'chess'));
      $hero_height = get_theme_mod('set_hero_height', 800);
      $hero_background = wp_get_attachment_url(get_theme_mod('set_hero_background'));
      ?>
      <section class="hero" style="background-image: url('<?= esc_url($hero_background) ?>');">
        <div class="overlay" style="min-height: <?= esc_attr($hero_height) ?>px">
          <div class="container">
            <div class="hero-items">
              <h1><?= esc_html($hero_title); ?></h1>
              <p><?= nl2br(esc_html($hero_subtitle)); ?></p>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
</div>
<?php get_footer(); ?>