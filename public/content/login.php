<?php
// $auth_email = $_POST['login_name'] ?? '';
// $auth_password = $_POST['login_password'] ?? '';

// if (isset($_POST['login_name'], $_POST['login_password'])) {
  
// }
?>
<section class="loginCard taskCard_width">
  <h2 class="loginCard__title">Вход и регистрация</h2>

  <form method="post" name ="login_form" class="loginCard__form">
    <h3 class="loginCard__formTitle">Авторизация</h3>

    <div class="loginCard__formSection">
      <label for="login_name">Логин / идентификатор: <code>*</code></label>
      <input type="name" name="login_name" class="loginCard__input" required>
    </div>

    <div class="loginCard__formSection">
      <label for="login_password">Пароль: <code>*</code></label>
      <input type="password" name="login_password" class="loginCard__input" required>
    </div>

    <div class="loginCard__buttons">
      <button type="submit" class="functionButton">вход</button>
      <button type="reset" class="functionButton">отмена</button>
    </div>
  </form>

  <form method="post" name ="registration_form" class="loginCard__form">
    <h3 class="loginCard__formTitle">Регистрация</h3>
    
    <div class="loginCard__formSection">
      <label for="reg_login">Логин / идентификатор: <code>*</code></label>
      <input type="name" name="reg_login" class="loginCard__input" required>
    </div>

    <div class="loginCard__formSection">
      <label for="reg_name">Имя:</label>
      <input type="password" name="reg_name" class="loginCard__input">
    </div>

    <div class="loginCard__formSection">
      <label for="reg_email">E-mail адресс: <code>*</code></label>
      <input type="password" name="reg_email" class="loginCard__input" required>
    </div>

    <div class="loginCard__formSection">
      <label for="reg_password">Пароль: <code>*</code></label>
      <input type="password" name="reg_password" class="loginCard__input" required>
    </div>

    <div class="loginCard__buttons">
      <button type="submit" class="functionButton">подтвердить</button>
      <button type="reset" class="functionButton">отмена</button>
    </div>
  </form>
</section>