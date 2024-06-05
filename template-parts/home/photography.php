<?php
$photography = get_field('photography');
$title = $photography['title'];
$text = $photography['text'];
?>

<div class="photography">
  <div class="container">
    <h2 class="photography__title title"><?php echo $title ?></h2>
    <div class="photography__text"><?php echo $text ?></div>
    <div class="photography__tabs tabs">
      <div class="tabs__nav">
        <div class="tabs__tab">Italy</div>
        <div class="tabs__tab">Australia</div>
        <div class="tabs__tab">India</div>
        <div class="tabs__tab">Brazil</div>
      </div>
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
      <div class="tabs__item"></div>
      <div class="tabs__item"></div>
      <div class="tabs__item"></div>
    </div>
  </div>
</div>