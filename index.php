<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = 'php-lesson-03';
    echo "<title>$title</title>";
    ?>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="dmicon.ico">
</head>

<body>
  <div class="bodyWrap bodyWrap_position">
    <header>
      <?php
      $headTitle = 'Домашнее задание по курсу PHP. Урок 3.';
      switch((int)date('n'))
      {
        case 1:
          $month = ' января ';
          break;
        case 2:
          $month = ' февраля ';
          break;
        case 3:
          $month = ' марта ';
          break;
        case 4:
          $month = ' апреля ';
          break;
        case 5:
          $month = ' мая ';
          break;
        case 6:
          $month = ' июня ';
          break;
        case 7:
          $month = ' июля ';
          break;
        case 8:
          $month = ' августа ';
          break;
        case 9:
          $month = ' сентября ';
          break;
        case 10:
          $month = ' октября ';
          break;
        case 11:
          $month = ' ноября ';
          break;
        case 12:
          $month = ' декабря ';
          break;
        default: $month = ' день сола ';
      }
      $date = date('j').$month.date('Y').' года.';
      echo "<h1 class='headerTitle'>$headTitle</h1>
        <p class='headerDate'>$date</p>";
      ?>
    </header>

    <main class="bodyWrap__main">
      <section class="taskCard">
        <h2 class="taskCard__title">Задание 1.</h2>
        <p class="taskCard__text">
          С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
        </p>

        <?php
        $num = 0;

        echo "<code>";
        while($num < 100) {
          if ($num % 3 == 0 && $num != 0) {
            echo "$num, ";
          }
          $num++;
        }
        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 2.</h2>
        <p class="taskCard__text">
        С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
        0 – это ноль. <br>
        1 – нечетное число. <br>
        2 – четное число. <br>
        3 – нечетное число. <br>
        … <br>
        10 – четное число.
        </p>

        <?php
        $num2 = 0;
        
        echo "<code>";

        do {
          if ($num2 == 0) {
            echo "$num2 - ноль. <br>";
          } elseif ($num2 % 2 == 0) {
            echo "$num2 - чётное число. <br>";
          } else {
            echo "$num2 - нечётное число. <br>";
          }

          $num2++;
        } while ($num2 >= 0 && $num2 <= 10);

        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 3.</h2>
        <p class="taskCard__text">
        Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
        Московская область:
        Москва, Зеленоград, Клин
        Ленинградская область:
        Санкт-Петербург, Всеволожск, Павловск, Кронштадт
        Рязанская область …
        </p>

        <?php
        $citiesArray = [
          'Московская Область' => ['Москва', 'Зеленоград', 'Клин', 'Химки'],
          'Ленинградская Область' => ['Санкт-Петербург', 'Всеволжск', 'Павловск', 'Кронштадт'],
          'Рязанская Область' => ['Рязань', 'Сараи', 'Шилово', 'Сасово']
        ];
        
        echo "<code>";

        foreach ($citiesArray as $key => $value) {
          echo $key.":<br>";
          foreach ($citiesArray[$key] as $value) {
            echo " - ".$value.".<br>";
          }
        }

        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 4.</h2>
        <p class="taskCard__text">
          Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’). <br>
          Написать функцию транслитерации строк.
        </p>

        <?php
        $testStringText = 'Тестовая строка для задания.';

        function translitString($stringToTranslit)
        {
          mb_strtolower($stringToTranslit);

          $lettersArray = [
            'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'j',
            'з' => 'z', 'и' => 'i', 'й' => 'yi', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
            'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'y', 'ф' => 'f', 'х' => 'h', 'ц' => 'c',
            'ч' => 'ch','ш' => 'sh', 'щ' => 'sch', 'ъ' => 'j', 'ы' => 'i', 'ь' => "'", 'э' => 'e', 'ю' => 'u', 'я' => 'ya'
          ];
          $stringToTranslit = strtr($stringToTranslit, $lettersArray);

          return $stringToTranslit;
        }

        echo "<code>";
        echo translitString($testStringText);
        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 5.</h2>
        <p class="taskCard__text">
          Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
        </p>

        <?php
        function convertSpaces($stringWithSpaces)
        {
          $stringWithSpaces = strtr($stringWithSpaces, [" " => "_"]);

          return $stringWithSpaces;
        }

        echo "<code>";
        echo convertSpaces($testStringText);
        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 6.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php
        
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 7.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php
        
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 8.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php
        
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 9.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php
        
        ?>

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