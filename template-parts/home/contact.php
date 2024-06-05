<?php
$contact = get_field('contact');
$title = $contact['title'];
$text = $contact['text'];
$form = $contact['form'];
?>

<div class="contact">
  <div class="container">
    <div class="contact__wrap">
      <div class="contact__content">
        <h2 class="contact__title title"><?php echo $title ?></h2>
        <div class="contact__text"><?php echo $text ?></div>
      </div>
      <div class="contact__form">
        <form action="" class="form">
          <div class="form__group">
            <label for="name">Name</label>
            <input id="name" type="text" class="form__input">
          </div>
          <div class="form__group">
            <label for="email">Email</label>
            <input id="email" type="email" class="form__input">
          </div>
          <div class="form__group">
            <label for="area">Message</label>
            <textarea name="" id="area"></textarea>
          </div>
          <button>Let’s get started</button>
        </form>
      </div>
    </div>
  </div>
</div>