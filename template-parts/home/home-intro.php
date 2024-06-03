<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$text = $home_intro['text'];
$image = $home_intro['image'];
?>

<div class="home-intro">
  <img class="home-intro__img" src="<?php echo $image; ?>" alt="">
  <div class="home-intro__content">
    <h1 class="home-intro__title"><?php echo $title; ?></h1>
    <div class="home-intro__text"><?php echo $text; ?></div>
  </div>
</div>