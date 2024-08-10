<?php get_header(); ?>
<div id="content" class="site-content">
  <div id="primary" class="content-area">
    <main id="main" class="site-main">
      <div class="container" id="products">
        <?php
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => 10,
          'category_name'  => 'product',
        );

        $postlist = new WP_Query($args);
        $odd = true;

        if ($postlist->have_posts()) {
          while ($postlist->have_posts()) {
            $postlist->the_post();
        ?>
            <article>
              <?php
              if ($odd) {
              ?>
                <div class="image-block article-block">
                  <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(750, 750)); ?></a>
                  <?php endif; ?>
                </div>
                <div class="info-block article-block">
                  <div class="info">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                  </div>
                </div>
              <?php
              } else {
              ?>
                <div class="info-block article-block">
                  <div class="info">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt(); ?>
                  </div>
                </div>
                <div class="image-block article-block">
                  <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(750, 750)); ?></a>
                  <?php endif; ?>
                </div>
              <?php
              }
              ?>
            </article>
          <?php
            $odd = !$odd;
          }
          wp_reset_postdata();
        } else { ?>
          <h2><?php esc_html_e('Please wait for our new product soon!', 'chess') ?></h2>
        <?php } ?>
      </div>
    </main>
  </div>
</div>
<?php get_footer(); ?>