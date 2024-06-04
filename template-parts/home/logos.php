<?php
$logos = get_field('logos');
$items = $logos['items'];
?>

<div class="logos">
  <div class="container">
    <div class="logos__wrap">
      <?php foreach ($items as $item) : ?>
        <?php
        $icon = $item['icon'];
        ?>

      <div class="logos__item">
        <?php echo $icon ?>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>