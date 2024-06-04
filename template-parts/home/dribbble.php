<?php
$dribbble = get_field('dribbble');
$title = $dribbble['title'];
$image = $dribbble['image'];
$text = $dribbble['text'];
$link = $dribbble['link'];
?>

<div class="dribbble">
  <div class="container">
    <h2 class="dribbble__title title"><?php echo $title ?></h2>
    <div class="dribbble__text"><?php echo $text ?></div>
    <a href="#" class="dribbble__link"><?php echo $link ?></a>
    <img class="dribbble__img" src="<?php echo $image ?>" alt="">
  </div>
</div>