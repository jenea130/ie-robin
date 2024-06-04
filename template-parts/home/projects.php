<?php
$projects = get_field('projects');
$label = $projects['label'];
$title = $projects['title'];
$button_text = $projects['button_text'];
$items = $projects['items'];
?>

<div class="projects">
  <div class="container">
    <div class="projects__label label"><?php echo $label ?></div>
    <h2 class="projects__title title"><?php echo $title ?></h2>
    <div class="projects__wrap">
      <?php foreach ($items as $key => $item) : ?>
        <?php
        $image = $item['image'];
        $title = $item['title'];
        $text = $item['text'];
        ?>

        <div class="projects__item">
          <div class="projects__img">
            <img src="<?php echo $image ?>" alt="">
          </div>
          <div class="projects__body">
            <h3 class="projects__subtitle"><?php echo $title ?></h3>
            <div class="projects__text"><?php echo $text ?></div>
          </div>
          <?php if ($key === 3) : ?>
            <button class="projects__btn"><?php echo $button_text ?></button>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>