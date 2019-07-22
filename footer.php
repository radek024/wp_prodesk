<footer class="footer">
  <?php wp_footer(); ?>
  <h2 class="page-title"><?php bloginfo('name'); ?></h2> &copy;
  <?php
   wp_nav_menu( array(
       'menu'              => 'primary',
       'theme_location'    => 'primary',
       'depth'             => 2,
       'container'         => '',
       'container_class'   => '',
'container_id'      => 'bs-example-navbar-collapse-1',
       'menu_class'        => 'menu',
       'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
       'walker'            => new wp_bootstrap_navwalker())
   );
?>
</footer>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/vendor/bootstrap.min.js"></script>
</body>
</html>
