<section class="taskCard">
  <h2 class="taskCard__title">Задание 2.</h2>
  
  <?php
  $t2_a = $_POST['t2_a'] ?? 9;
  $t2_b = $_POST['t2_b'] ?? 11;
  $t2_oper = $_POST['t2_oper'] ?? 'mult';
  ?>

  <form method="POST" id="calc_two" class="taskCard__form">
    <div>
      <label for="t2_a">Введите значение a: </label>
      <input type="number" class="taskCard__input" value="<?= $t2_a ?>" name="t2_a">
    </div>

    <div>
      <label for="t2_b">Введите значение b: </label>
      <input type="number" class="taskCard__input" value="<?= $t2_b ?>" name="t2_b">
    </div>

    <div>
      <label for="t2_oper">Действие:</label>
      <select class="taskCard__input taskCard__input_select" name="t2_oper">
        <option disabled>оператор</option>
        <option <?php if ($t2_oper == 'summ') { echo('selected'); } ?> value="summ">сумма</option>
        <option <?php if ($t2_oper == 'diff') { echo('selected'); } ?> value="diff">разность</option>
        <option <?php if ($t2_oper == 'mult') { echo('selected'); } ?> value="mult">умножение</option>
        <option <?php if ($t2_oper == 'div') { echo('selected'); } ?> value="div">деление</option>
      </select>
    </div>
  </form>

  <div class="taskCard__buttons taskCard__buttons_hideColumn">
    <input type="submit" value="выполнить" class="functionButton" form="calc_two">
    
    <code>
      Результат = <?=mathOperation($t2_a, $t2_b, $t2_oper)?>
    </code>
  </div>
</section>