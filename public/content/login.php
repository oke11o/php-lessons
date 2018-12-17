<section class="loginCard taskCard_width">
  <h2 class="loginCard__title">Вход и регистрация</h2>

  <form method="post" name ="login_form" class="loginCard__form" action="?page=login">
    <h3 class="loginCard__formTitle">Авторизация</h3>

    <div class="loginCard__formSection">
      <label for="login_id">Логин / идентификатор: <code>*</code></label>
      <input type="name" name="login_id" class="loginCard__input" required value="<?=$login_id?>">
    </div>
    
    <div class="loginCard__formSection">
      <label for="login_password">Пароль: <code>*</code></label>
      <input type="password" name="login_password" class="loginCard__input" required>
    </div>

    <code><?=$loginMessage?></code>

    <div class="loginCard__buttons">
      <button type="submit" class="functionButton">вход</button>
      <button type="reset" class="functionButton">отмена</button>
    </div>
  </form>

  <form method="post" name ="registration_form" class="loginCard__form" action="?page=login">
    <h3 class="loginCard__formTitle">Регистрация</h3>
    
    <div class="loginCard__formSection">
      <label for="reg_id">Логин / идентификатор: <code>*</code></label>
      <input type="name" name="reg_id" class="loginCard__input" required value="<?=$reg_id?>">
      <code><?=$regLoginMessage?></code>
    </div>
    
    <div class="loginCard__formSection">
      <label for="reg_name">Имя:</label>
      <input type="name" name="reg_name" class="loginCard__input" required value="<?=$reg_name?>">
    </div>

    <div class="loginCard__formSection">
      <label for="reg_email">E-mail адресс: <code>*</code></label>
      <input type="email" name="reg_email" class="loginCard__input" required value="<?=$reg_email?>">
      <code><?=$regEmailMessage?></code>
    </div>

    <div class="loginCard__formSection">
      <label for="reg_password">Пароль: <code>*</code></label>
      <input type="password" name="reg_password" class="loginCard__input" required>
      <input type="password" name="reg_confirm_pw" class="loginCard__input" required>
      <code><?=$regPasswordMessage?></code>
    </div>

    <div class="loginCard__buttons">
      <button type="submit" class="functionButton">подтвердить</button>
      <button type="reset" class="functionButton">отмена</button>
    </div>
  </form>
</section>