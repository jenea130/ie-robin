<?php
$photography = get_field('photography');
$title = $photography['title'];
$text = $photography['text'];
$items = $photography['items'];
?>

<div class="photography">
  <div class="container">
    <h2 class="photography__title title"><?php echo $title ?></h2>
    <div class="photography__text"><?php echo $text ?></div>
    <div class="photography__tabs tabs">
      <div class="tabs__nav">
        <?php foreach ($items as $item) : ?>
          <?php
          $title = $item['title'];
          ?>
          <div class="tabs__tab"><?php echo $title ?></div>
        <?php endforeach; ?>
      </div>
      <div class="tabs__content">
        <div class="tabs__item">
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo1.jpg" alt="">
          </div>
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo2.jpg" alt="">
          </div>
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo3.jpg" alt="">
          </div>
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo4.jpg" alt="">
          </div>
        </div>
        <div class="tabs__item">
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo3.jpg" alt="">
          </div>
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo4.jpg" alt="">
          </div>
        </div>
        <div class="tabs__item">
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo2.jpg" alt="">
          </div>
        </div>
        <div class="tabs__item">

          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo2.jpg" alt="">
          </div>
          <div class="tabs__img">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/i/photo3.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>