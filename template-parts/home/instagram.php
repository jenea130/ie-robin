<?php
$instagram = get_field('instagram');
$title = $instagram['title'];
$image = $instagram['image'];
$text = $instagram['text'];
$link = $instagram['link'];
?>

<div class="instagram">
  <div class="container">
    <div class="instagram__content">
      <h2 class="instagram__title"><?php echo $title ?></h2>
      <div class="instagram__text"><?php echo $text ?></div>
      <a href="#" class="instagram__link"><?php echo $link ?></a>
    </div>
  </div>
  <img src="<?php echo $image ?>" alt="" class="instagram__img">
</div>