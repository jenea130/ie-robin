<?php
$about = get_field('about');
$title = $about['title'];
$text = $about['text'];
$link = $about['link'];
$items = $about['items'];
?>

<div class="about">
  <div class="container">
    <div class="about__wrap">
      <div class="about__col">
        <div class="about__content">
          <h2 class="about__title title"><?php echo $title ?></h2>
          <div class="about__text"><?php echo $text ?></div>
          <a href="#" class="about__link"><?php echo $link ?></a>
        </div>
      </div>
      <div class="about__col">
        <?php foreach ($items as $item) : ?>
          <?php
          $image = $item['image'];
          $text = $item['text'];
          $author = $item['author'];
          $cat = $item['category'];
          ?>

          <div class="about__item">
            <div class="about__img">
              <img src="<?php echo $image ?>" alt="">
            </div>
            <div class="about__body">
              <div class="about__cite"><?php echo $text ?></div>
              <div class="about__author"><?php echo $author ?></div>
              <span class="about__cat"><?php echo $cat ?></span>
            </div>
          </div>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>