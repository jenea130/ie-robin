<?php
$philosophy = get_field('philosophy');
$title = $philosophy['title'];
$image = $philosophy['image'];
$text = $philosophy['text'];
$link = $philosophy['link'];
?>

<div class="philosophy">
  <div class="container">
    <div class="philosophy__content">
      <h2 class="philosophy__title"><?php echo $title ?></h2>
      <div class="philosophy__text"><?php echo $text ?></div>
      <a href="#" class="philosophy__link"><?php echo $link ?></a>
    </div>
  </div>
  <img src="<?php echo $image ?>" alt="" class="philosophy__img">
</div>