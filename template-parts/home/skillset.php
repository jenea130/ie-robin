<?php
$skillset = get_field('skillset');
$title = $skillset['title'];
$text = $skillset['text'];
$items = $skillset['items'];
?>

<div class="skillset">
  <div class="container">
    <div class="skillset__wrap">
      <div class="skillset__content">
        <h2 class="skillset__title title"><?php echo $title ?></h2>
        <div class="skillset__text text"><?php echo $text ?></div>
      </div>
      <div class="skillset__body">
        <?php foreach ($items as $item) : ?>
          <?php
          $icon = $item['icon'];
          $title = $item['title'];
          $text = $item['text'];
          ?>
          <div class="skillset__item">
            <div class="skillset__icon">
              <?php echo $icon ?>
            </div>
            <h4 class="skillset__subtitle"><?php echo $title; ?></h4>
            <div class="skillset__desc text"><?php echo $text ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>