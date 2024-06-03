<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$text = $home_intro['text'];
$image = $home_intro['image'];
?>

<div class="home-intro">
  <img class="home-intro__img" src="<?php echo $image; ?>" alt="">
</div>