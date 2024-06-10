<?php
$experience = get_field('experience');
$title = $experience['title'];
$label = $experience['label'];
$items = $experience['items'];
?>

<div class="experience" id="experience">
  <div class="container">
    <div class="experience__label"><?php echo $label; ?></div>
    <h2 class="experience__title"><?php echo $title ?></h2>
    <div class="experience__wrap">
      <?php foreach ($items as $key => $item) : ?>
        <?php
        $number = $item['number'];
        $title = $item['subtitle'];
        $text = $item['text'];
        ?>
        <div class="experience__item">
          <div class="experience__number"><?php echo $number ?></div>
          <div class="experience__subtitle experience__subtitle--color-<?php echo $key ?>"><?php echo $title ?></div>
          <div class="experience__text text"><?php echo $text ?></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>