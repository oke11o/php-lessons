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
          Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
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
        <p class="taskCard__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eligendi magni! Voluptas autem eos repellat nulla consequatur quae corporis, dicta repellendus expedita. Dolores sequi ratione hic facilis accusantium unde iusto.
        </p>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 4.</h2>
        <p class="taskCard__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eligendi magni! Voluptas autem eos repellat nulla consequatur quae corporis, dicta repellendus expedita. Dolores sequi ratione hic facilis accusantium unde iusto.</p>

        <div class="taskCard__buttons">
          <button class="functionButton" onclick="showCode('task4')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task4_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task4_codeBlock">
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
          </ol></code>
        </div>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 5.</h2>
        <p class="taskCard__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos architecto dolorum nobis ut id eius deleniti! Accusantium qui, autem soluta iusto earum molestiae dignissimos sint, aspernatur, numquam modi repellendus magni?</p>

        <div class="taskCard__buttons">
          <button class="functionButton" onclick="showCode('task5')">view code</button>
        </div>

        <div class="taskCard__codeWrap taskCard__codeWrap_hidden" id="task5_codeWrap">
          <code><ol class="codeBlock codeBlock_geometry codeBlock_hidden" id="task5_codeBlock">
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
            <li class="codeBlock__line">
              
            </li>
          </ol></code>
        </div>
      </section>
    </main>

    <footer>
      <div class="rights">
        <span>All Rights Reserved &copy; 2018 Все задания выполнил Михаил Успенский.</span>
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>