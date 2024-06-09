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
        <?php foreach ($items as $item) : ?>
          <?php
          $gallery = $item['gallery'];
          ?>
          <div class="tabs__item">
            <?php foreach ($gallery as $image) : ?>
              <div class="tabs__img">
                <img src="<?php echo $image; ?>" alt="">
              </div>
            <?php endforeach; ?>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>