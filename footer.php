<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ar-starter
 */

?>

<?php
$footer = get_field('footer', 'options');
$logo = $footer['logo'];
$socials = $footer['socials'];
?>

<footer class="main-footer">
  <div class="container">
    <div class="main-footer__wrap">
      <div class="main-footer__col">
        <div class="main-footer__logo">
          <?php echo $logo ?>
        </div>
        <ul class="main-footer__socials">
          <?php foreach ($socials as $item) : ?>
            <?php
            $url = $item['url'];
            $type = $item['type'];
            $icon_url = 'template-parts/icons/icon-' . $type;
            ?>
          <li>
            <a href="<?php echo $url ?>" target="_about">
            <?php get_template_part($icon_url); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
      <div class="main-footer__col">
        <?php wp_nav_menu([
          'theme_location'  => 'footer-1',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__col">
        <?php wp_nav_menu([
          'theme_location'  => 'footer-2',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
    </div>
    <span class="main-footer__copyright">Not Copyright 2020 • Robin Williams. Webflow cloneable</span>
  </div>

</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>