<section class="feedbackCard taskCard_width">
  <h2 class="feedbackCard__title">Отзывы</h2>

  <form method="post" name="feedback_form" class="feedback">
    <div class="feedback__section">
      <label for="feedback_name">Имя отправителя: <code>*</code></label>
      <input type="name" name="feedback_name" placeholder="Введите ваше имя" class="feedback__input" required>
    </div>

    <div class="feedback__section">
      <label for="feedback_email">Адрес электронной почты: <code>*</code></label>
      <input type="email" name="feedback_email" placeholder="Введите ваш e-mail" class="feedback__input" required>
    </div>

    <div class="feedback__section">
      <label for="feedback_text">Текст сообщения: <code>*</code></label>
      <textarea name="feedback_text" class="feedback__text" placeholder="Введите ваше сообщение" required></textarea>
    </div>

    <div class="feedback__buttons">
      <input type="submit" class="functionButton" value="отправить">
      <input type="reset" class="functionButton" value="отмена">
    </div>
  </form>

  <div class="feedbackCard__postsWrap">
    <?php
    //get last six feedbacks from database
    $lastSix_fb = mysqli_query($mysqli, 'SELECT * FROM `feedbacks` ORDER BY `id` DESC LIMIT 0, 6');

    //post last six feedbacks from database
    showFeedbacks($lastSix_fb);
    ?>
  </div>
</section>