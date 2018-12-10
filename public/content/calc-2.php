<section class="taskCard">
  <h2 class="taskCard__title">Задание 2.</h2>
  
  <?php
  $t2_a = $_POST['t2_a'] ?? 9;
  $t2_b = $_POST['t2_b'] ?? 11;
  ?>

  <form method="POST" id="calc_two">
    <label for="t2_a">Введите значение a</label>
    <input type="number" class="taskCard__input" value="<?= $t2_a ?>" name="t2_a">
    <br>
    <label for="t2_b">Введите значение b</label>
    <input type="number" class="taskCard__input" value="<?= $t2_b ?>" name="t2_b">
    <br>
    <label for="t2_oper">Действие:</label>
    <select class="taskCard__input taskCard__input_select" name="t2_oper">
      <option disabled>оператор</option>
      <option value="summ">сумма</option>
      <option value="diff">разность</option>
      <option value="mult">умножение</option>
      <option value="div">деление</option>
    </select>
  </form>

  <div class="taskCard__buttons taskCard__buttons_hideColumn">
    <input type="submit" value="выполнить" class="functionButton" form="calc_two">
    <?php $t2_oper = $_POST['t2_oper'] ?? ''; ?>
    
    <code>
      Результат = <?= mathOperation($t2_a, $t2_b, $t2_oper); ?>
    </code>
  </div>
</section>