<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Honeypress Child
 */
?>
</div>
<?php if (is_front_page() && 'page' == get_option( 'show_on_front' )) { ?>
<footer class="site-footer">
  <div class="container">
    <?php
    if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3')): ?>
    <div class="seprator-line"></div>
      <?php get_template_part('sidebar','footer');
    endif;?>
  </div>
</footer>
<?php } else { ?>
  <footer class="site-footer">
    <div class="container">
      <?php
      if(is_active_sidebar('footer-sidebar-1') || is_active_sidebar('footer-sidebar-2') || is_active_sidebar('footer-sidebar-3')): ?>
      <div class="seprator-line"></div>
        <?php get_template_part('sidebar','footer');
      endif;?>
    </div>
  </footer>
<?php } ?>
</body>
</html>
