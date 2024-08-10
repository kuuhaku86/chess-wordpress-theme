<footer class="site-footer">
  <div class="container">
    <div class="copyright">
      <p><?= esc_html(get_theme_mod('set_copyright', __('Copyright X - All Rights Reserved', 'chess'))); ?></p>
    </div>
    <nav class="footer-menu">
      <?php wp_nav_menu(array('theme_location' => 'chess_footer_menu', 'depth' => 1)); ?>
    </nav>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>