<footer>
  <nav class="footer-navigation">
    <?php
    wp_nav_menu(array(
      'menu' => 'footer',
      'menu_class'  => 'footer-menu',
      'depth' => 0,
      'fallback_cb' => false
    ));
    ?>
  </nav><!-- .footer-navigation -->
</footer>
<?php wp_fooger(); ?>
</body>
</html>