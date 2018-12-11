<section class="taskCard taskCard_width">
  <h2 class="taskCard__title">Отзывы</h2>

  <form method="post" name="send_feedback" class="feedback">
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
      <textarea name="feedback_text" class="feedback__text" placeholder="Введите ваше сообщение"></textarea>
    </div>

    <div class="feedback__buttons">
      <input type="submit" class="functionButton" value="отправить">
      <input type="reset" class="functionButton" value="отмена">
    </div>
  </form>

  <?php
  $fb_name = $_POST['feedback_name'] ?? '';
  $fb_email = $_POST['feedback_email'] ?? '';
  $fb_text = $_POST['feedback_text'] ?? '';
  $fb_date = date('Y'.'-'.'m'.'-'.'d');
  $fb_time = date('H'.':'.'i');

  //when required fields are not null
  if ($fb_name && $fb_email && $fb_text) {
    createFeedBack($mysqli,
    "INSERT INTO feedbacks (name, email, comment, date, time)
    VALUES
    ('$fb_name', '$fb_email', '$fb_text', '$fb_date', '$fb_time');");
  }

  $lastSix_fb = getArrayFromMySQL($mysqli, 'SELECT * FROM `feedbacks` ORDER BY `id` DESC LIMIT 0, 6');
  ?>

  <div class="taskCard__feedback">
    <?php
    showLastFeedbacks($lastSix_fb);
    ?>
  </div>
</section>