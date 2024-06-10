<?php
$contact = get_field('contact');
$title = $contact['title'];
$text = $contact['text'];
$form = $contact['form'];
?>

<div class="contact" id="contact">
  <div class="container">
    <div class="contact__wrap">
      <div class="contact__content">
        <h2 class="contact__title title"><?php echo $title ?></h2>
        <div class="contact__text"><?php echo $text ?></div>
      </div>
      <div class="contact__form">
        <form action="" class="form">
          <?php echo do_shortcode($form) ?>
        </form>
      </div>
    </div>
  </div>
</div>