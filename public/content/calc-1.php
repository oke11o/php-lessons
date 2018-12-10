<section class="taskCard">
  <h2 class="taskCard__title">Задание 1.</h2>
  
  <?php
  $t1_a = $_POST['t1_a'] ?? 7;
  $t1_b = $_POST['t1_b'] ?? 3;
  ?>

  <form action="/" method="POST" id="calc_one" class="taskCard__form">
    <div>
      <label for="t1_a">Введите значение a: </label>
      <input type="number" class="taskCard__input" value="<?= $t1_a; ?>" name="t1_a">
    </div>

    <div>
      <label for="t1_b">Введите значение b: </label>
      <input type="number" class="taskCard__input" value="<?= $t1_b; ?>" name="t1_b">
    </div>
  </form>

  <div class="taskCard__buttons taskCard__buttons_hideColumn">
    <input type="submit" value="выполнить" class="functionButton" form="calc_one">    
    <code>
      Сумма = <?= summ($t1_a, $t1_b) ?> <br>
      Разность = <?= diff($t1_a, $t1_b) ?> <br>
      Произведение = <?= mult($t1_a, $t1_b) ?> <br>
      Соотношение = <?= div($t1_a, $t1_b) ?>
    </code>
  </div>
</section>