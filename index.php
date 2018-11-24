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
        $date = '24 ноября 2018 года.';
        echo "<h1 class='headerTitle'>$headTitle</h1>
        <p class='headerDate'>$date</p>";
      ?>
    </header>
    <main class="bodyWrap__main">
      <section class="taskCard">
        <h2 class="taskCard__title">test block</h2>
        <?php
          // if (true) {
          //   echo 'true';
          // }

          // $a = 5;
          // $b = 5;
          // if($a < $b) {
          //   echo 'a меньше b';
          // } elseif($a > $b) {
          //   echo 'a больше b';
          // } else {
          //   echo 'a равно b';
          // }

          // $now = '';
          // if($now == 'evening') {
          //   echo 'good evening';
          // } elseif($now == 'morning') {
          //   echo 'good morning';
          // } elseif($now == 'night') {
          //   echo 'good night';
          // } else {
          //   echo 'good day';
          // }
          // switch($now) {
          //   case 'evening':
          //     echo 'good evening';
          //     break;
          //   case 'morning':
          //     echo 'good morning';
          //     break;
          //   case 'night':
          //     echo 'good night';
          //     break;
          //   default:
          //     echo 'good day';
          // }

          //тернарный оператор ($a < $b) ? (результат если да) : (результат если нет); //c echo не работает!!!
          // $a = 11;
          // $b = 5;
          // $a > $b ? $c = $a : $c = $b;

          // echo $c;
          // echo PHP_EOL.'<br>end'; //PHP_EOL = end of line for terminal

          // function function_name(parametr1, parametr2...parametrN)
          // { //фигурные скобки лучше с новой строки по стандартам языка
          //   operations;
          // }

          // if(compare_numbers(7, 7)) {
          //   echo 'числа равны';
          // } else {
          //   echo 'числа не равны';
          // }
          // var_dump(compare_numbers(7, 33));
          // function compare_numbers($x, $y)
          // {
          //   if($x !== $y) {
          //     return false;
          //   } else {
          //     return true;
          //   }
          // }
          
          // var_dump(compare_numbers(23, 0));
          // function compare_numbers($x = 1, $y = 1) //default parameters
          // {
          //   return $x . '-' . $y;
          // }
          
          fibonacci(7);

          function fibonacci($n, $prev1 = 1, $prev2 = 0)
          {
            $current = $prev1 + $prev2;
            echo "$current ";
            if($n > 1) {
              $n--;
              fibonacci($n, $current, $prev1);
            }
          }

        ?>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 1.</h2>
        <p class="taskCard__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eligendi magni! Voluptas autem eos repellat nulla consequatur quae corporis, dicta repellendus expedita. Dolores sequi ratione hic facilis accusantium unde iusto.</p>
      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 2.</h2>
        <p class="taskCard__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, eligendi magni! Voluptas autem eos repellat nulla consequatur quae corporis, dicta repellendus expedita. Dolores sequi ratione hic facilis accusantium unde iusto.
        </p>
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
<!-- 
  вопросы к изучению
  -
  -
  -
  -
  -
 -->