<?php get_header(); ?>
<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            $about_us_title = get_theme_mod('set_about_us_title', __('Please, type some title', 'chess'));
            $about_us_content = get_theme_mod('set_about_us_content', __('Please, type some content', 'chess'));
            ?>
            <div class="about-us">
                <h1><?= esc_html($about_us_title) ?></h1>
                <p><?= esc_html($about_us_content) ?></p>
            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>