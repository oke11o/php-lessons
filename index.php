<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $title = 'php-lesson-02';
    echo "<title>$title</title>"; ?>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="dmicon.ico">
</head>

<body>
  <div class="bodyWrap bodyWrap_position">
    <header>
      <?php
        $headTitle = 'Домашнее задание по курсу PHP. Урок 2.';
        $date ="'24 ноября 2018 года.";
        echo "<h1 class='headerTitle'>$headTitle</h1>
        <p class='headerDate'>$date</p>";
      ?>
    </header>

    <main class="bodyWrap__main">
      <section class="taskCard">
        <h2 class="taskCard__title">Задание 1.</h2>
        <p class="taskCard__text">
          Объявить две целочисленные переменные <code>$a</code> и <code>$b</code> и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу: <br>
          если <code>$a</code> и <code>$b</code> положительные, вывести их разность; <br>
          если <code>$а</code> и <code>$b</code> отрицательные, вывести их произведение; <br>
          если <code>$а</code> и <code>$b</code> разных знаков, вывести их сумму; <br>
          ноль можно считать положительным числом.
        </p>
        <p class="taskCard__release">
          <form method="POST" id="t1_form">
            Введите значение <code>$a</code>:
            <input type="number" class="taskCard__input" value="5" name="t1_a">
            Введите значение <code>$b</code>:
            <input type="number" class="taskCard__input" value="9" name="t1_b">            
          </form>
        </p>

        <div class="taskCard__buttons taskCard__buttons_hideColumn">
          <input type="submit" value="выполнить" class="functionButton" form="t1_form">
          <?php
            $a = $_POST['t1_a'];
            $b = $_POST['t1_b'];
            if ($a >= 0 && $b >= 0) { 
              $c = $a - $b;
              echo "<code>a - b = $c</code>";
            } elseif ($a < 0 && $b < 0) {
              $c = $a * $b;
              echo "<code>a * b = $c</code>";
            } else {
              $c = $a + $b;
              echo "<code>a + b = $c</code>";
            }
          ?>
          <button class="functionButton" onclick="showCode('task1')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task1_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task1_codeBlock">
            <li class="codeBlock__line">
              if ($a &gt;= 0 &amp;&amp; $b &gt;= 0) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$c = $a - $b;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;echo "a - b = $c";
            </li>
            <li class="codeBlock__line">
              } elseif ($a &lt; 0 &amp;&amp; $b &lt; 0) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$c = $a * $b;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;echo "a * b = $c";
            </li>
            <li class="codeBlock__line">
              } else {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$c = $a + $b;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;echo "a + b = $c";
            </li>
            <li class="codeBlock__line">
              }
            </li>
          </ol></code>
        </div>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 2.</h2>
        <p class="taskCard__text">
          Присвоить переменной <code>$а</code> значение в промежутке <code>[0..15]</code>. С помощью оператора <code>switch</code> организовать вывод чисел от <code>$a</code> до <code>15</code>.
        </p>
        <form method="POST" id="t2_form">
          Введите значение <code>$a</code>:
          <input type="number" class="taskCard__input" value="4" min="0" max="15" name="t2_a">
        </form>

        <div class="taskCard__buttons taskCard__buttons_column">
          <input type="submit" value="выполнить" class="functionButton" form="t2_form">
          <?php
            $a = $_POST['t2_a'];
            echo "<code>"; 
            switch ($a) {
              case 0: echo "0";
              case 1: echo " 1";
              case 2: echo " 2";
              case 3: echo " 3";
              case 4: echo " 4";
              case 5: echo " 5";
              case 6: echo " 6";
              case 7: echo " 7";
              case 8: echo " 8";
              case 9: echo " 9";
              case 10: echo " 10";
              case 11: echo " 11";
              case 12: echo " 12";
              case 13: echo " 13";
              case 14: echo " 14";
              case 15: echo " 15";
            }
            echo "</code>";
          ?>
          <button class="functionButton" onclick="showCode('task2')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task2_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task2_codeBlock">
            <li class="codeBlock__line">
              switch ($a) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 0: echo "0";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 1: echo "1";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 2: echo "2";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 3: echo "3";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 4: echo "4";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 5: echo "5";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 6: echo "6";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 7: echo "7";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 8: echo "8";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 9: echo "9";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 10: echo "10";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 11: echo "11";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 12: echo "12";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 13: echo "13";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 14: echo "14";
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;case 15: echo "15";
            </li>
            <li class="codeBlock__line">
              }
            </li>
          </ol></code>
        </div>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 3.</h2>
        <p class="taskCard__text">
          Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор <code>return</code>.
        </p>

        <form method="post" id="t3_form">
          Введите значение <code>$a</code>:
          <input type="number" class="taskCard__input" value="7" name="t3_a">
          Введите значение <code>$b</code>:
          <input type="number" class="taskCard__input" value="2" name="t3_b">            
        </form>

        <div class="taskCard__buttons taskCard__buttons_column">
          <input type="submit" value="выполнить" class="functionButton" form="t3_form">
          <?php
            $t3_a = $_POST['t3_a'];
            $t3_b = $_POST['t3_b'];

            function summ($x, $y) {
              $summ = $x + $y;
              return $summ;
            }

            function diff($x, $y) {
              $diff = $x - $y;
              return $diff;
            }

            function mult($x, $y) {
              $mult = $x * $y;
              return $mult;
            }

            function div($x, $y) {
              if($x != 0 && $y != 0) $div = $x / $y;
              else $div = 0;
              return $div;
            }
            echo "<code>";
            echo "Сумма = ".summ($t3_a, $t3_b)."; ";
            echo "Разность = ".diff($t3_a, $t3_b)."; ";
            echo "Произведение = ".mult($t3_a, $t3_b)."; ";
            echo "Соотношение = ".div($t3_a, $t3_b).";";
            echo "</code>";
          ?>
          <button class="functionButton" onclick="showCode('task3')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task3_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task3_codeBlock">
            <li class="codeBlock__line">
              function summ($x, $y) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$summ = $x + $y;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;return $summ;
            </li>
            <li class="codeBlock__line">
              }
            </li>
            <li class="codeBlock__line">
              function diff($x, $y) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$diff = $x - $y;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;return $diff;
            </li>
            <li class="codeBlock__line">
              }
            </li>
            <li class="codeBlock__line">
              function mult($x, $y) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$mult = $x * $y;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;return $mult;
            </li>
            <li class="codeBlock__line">
              }
            </li>
            <li class="codeBlock__line">
              function div($x = 1, $y = 1) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;if($x != 0 && $y != 0) $div = $x / $y;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;else $div = 0;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;return $div;
            </li>
            <li class="codeBlock__line">
              }
            </li>
            <li class="codeBlock__line">
              echo "Сумма = ".summ($a, $b)."; ";
            </li>
            <li class="codeBlock__line">
              echo "Разность = ".diff($a, $b)."; ";
            </li>
            <li class="codeBlock__line">
              echo "Произведение = ".mult($a, $b)."; ";
            </li>
            <li class="codeBlock__line">
              echo "Соотношение = ".div($a, $b).";";
            </li>
          </ol></code>
        </div>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 4.</h2>
        <p class="taskCard__text">
          Реализовать функцию с тремя параметрами: <code>function mathOperation($arg1, $arg2, $operation)</code>, где <code>$arg1</code>, <code>$arg2</code> – значения аргументов, <code>$operation</code> – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать <code>switch</code>).
        </p>
        
        <form method="post" id="t4_form">
          Введите <code>$a</code>:
          <input type="number" class="taskCard__input" value="11" name="t4_a">
          Введите <code>$b</code>:
          <input type="number" class="taskCard__input" value="-5" name="t4_b">
          Действие:
          <select class="taskCard__input taskCard__input_select" name="t4_oper">
            <option disabled>оператор</option>
            <option value="summ">сумма</option>
            <option selected value="diff">разность</option>
            <option value="mult">умножение</option>
            <option value="div">деление</option>
          </select>
        </form>

        <div class="taskCard__buttons taskCard__buttons_hideColumn">
          <input type="submit" value="выполнить" class="functionButton" form="t4_form">
            <?php
              $a = $_POST['t4_a'];
              $b = $_POST['t4_b'];
              $operation = $_POST['t4_oper'];
              function mathOperation($arg1, $arg2, $oper) {
                $result = 0;
                switch($oper) {
                  case "summ":
                    $result = summ($arg1, $arg2);
                    break;
                  case "diff":
                    $result = diff($arg1, $arg2);
                    break;
                  case "mult":
                    $result = mult($arg1, $arg2);
                    break;
                  case "div":
                    $result = div($arg1, $arg2);
                    break;
                }
                return $result;
              }
              echo "<code>";
              echo "Результат = ".mathOperation($a, $b, $operation);
              echo "</code>";
            ?>
          <button class="functionButton" onclick="showCode('task4')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task4_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task4_codeBlock">
            <li class="codeBlock__line">
              function mathOperation($arg1, $arg2, $oper) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;$result = 0;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;switch($oper) {
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;case "summ":
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = summ($arg1, $arg2);
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;case "diff":
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = diff($arg1, $arg2);
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;case "mult":
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = mult($arg1, $arg2);
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;case "div":
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$result = div($arg1, $arg2);
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;}
            </li>
            <li class="codeBlock__line">
              &nbsp;&nbsp;return $result;
            </li>
            <li class="codeBlock__line">
              }
            </li>
            <li class="codeBlock__line">
              echo "Результат = ".mathOperation($a, $b, $operation);
            </li>
          </ol></code>
        </div>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 5.</h2>
        <p class="taskCard__text">Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.</p>

        <div class="taskCard__buttons">
          <button class="functionButton" onclick="showCode('task5')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task5_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_fewHidden" id="task5_codeBlock">
            <li class="codeBlock__line">
              <code class="codeComment">//вывод порядкового номера года, 4 цифры</code>
            </li>
            <li class="codeBlock__line">
              &lt;?php echo date('Y'); ?&gt;
            </li>
          </ol></code>
        </div>
      </section>
    </main>

    <footer>
      <div class="rights">
        <span>All Rights Reserved &copy; <?php echo date('Y'); ?> Все задания выполнил Михаил Успенский.</span>
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>