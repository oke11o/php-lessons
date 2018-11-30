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
          $month = 'января ';
          break;
        case 2:
          $month = 'февраля ';
          break;
        case 3:
          $month = 'марта ';
          break;
        case 4:
          $month = 'апреля ';
          break;
        case 5:
          $month = 'мая ';
          break;
        case 6:
          $month = 'июня ';
          break;
        case 7:
          $month = 'июля ';
          break;
        case 8:
          $month = 'августа ';
          break;
        case 9:
          $month = 'сентября ';
          break;
        case 10:
          $month = 'октября ';
          break;
        case 11:
          $month = 'ноября ';
          break;
        case 12:
          $month = 'декабря ';
          break;
        default: $month = ' день сола ';
      }
      $date = date('j').'&nbsp;'.$month.'<br>'.date('Y').'&nbsp;года.';
      echo "<h1 class='headerTitle'>$headTitle</h1>
        <p class='headerDate'>$date</p>";
      ?>
    </header>

    <main class="bodyWrap__main">
<!-- код для 6-го задания начинается тут -->
      <?php
      //переменные с названиями и ссылками пунктов меню
      $menu_item1 = 'главная'; $href_item1 = '#1'; //пункт меню
      
      $menu_item2 = 'каталог'; $href_item2 = '#2'; //пункт меню
      $subMenu2_item1 = 'перейти&nbsp;в&nbsp;каталог'; $subMenu2_href1 = '#2-1'; //пункт подменю
      $subMenu2_item2 = 'новое&nbsp;в&nbsp;каталоге'; $subMenu2_href2 = '#2-2'; //пункт подменю

      $menu_item3 = 'о&nbsp;нас'; $href_item3 = '#3'; //пункт меню
      $subMenu3_item1 = 'команда'; $subMenu3_href1 = '#3-1'; //пункт подменю
      $subMenu3_item2 = 'портфолио'; $subMenu3_href2 = '#3-2'; //пункт подменю
      
      $menu_item4 = 'контакты'; $href_item4 = '#4'; //пункт меню
      $subMenu4_item1 = 'адреса'; $subMenu4_href1 = '#4-1'; //пункт подменю
      $subMenu4_item2 = 'обратная&nbsp;связь'; $subMenu4_href2 = '#4-2'; //пункт подменю
      
      $menu_item5 = 'войти'; $href_item5 = '#5'; //пункт меню
      $subMenu5_item1 = 'вход'; $subMenu5_href1 = '#5-1'; //пункт подменю
      $subMenu5_item2 = 'регистрация'; $subMenu5_href2 = '#5-2'; //пункт подменю     
      
      //массивы с подменю для каждого пункта меню
      $subMenuArr2 = [
        $subMenu2_href1 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu2_href1.' class="taskCard__subMenuListHref">'.$subMenu2_item1.'</a></li>',

        $subMenu2_href2 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu2_href2.' class="taskCard__subMenuListHref">'.$subMenu2_item2.'</a></li>'
      ];

      $subMenuArr3 = [
        $subMenu3_href1 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu3_href1.' class="taskCard__subMenuListHref">'.$subMenu3_item1.'</a></li>',

        $subMenu3_href2 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu3_href2.' class="taskCard__subMenuListHref">'.$subMenu3_item2.'</a></li>'
      ];

      $subMenuArr4 = [
        $subMenu4_href1 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu4_href1.' class="taskCard__subMenuListHref">'.$subMenu4_item1.'</a></li>',

        $subMenu4_href2 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu4_href2.' class="taskCard__subMenuListHref">'.$subMenu4_item2.'</a></li>'
      ];

      $subMenuArr5 = [
        $subMenu5_href1 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu5_href1.' class="taskCard__subMenuListHref">'.$subMenu5_item1.'</a></li>',

        $subMenu5_href2 => '<li class="taskCard__subMenuList">
        <a href='.$subMenu5_href2.' class="taskCard__subMenuListHref">'.$subMenu5_item2.'</a></li>'
      ];

      //массив с пунктами меню и массивами подменю
      $menuArray = [
        $href_item1 => ['<li class="taskCard__menuList"><a href='.$href_item1.'>'.$menu_item1.'</a>'],
        $href_item2 => ['<li class="taskCard__menuList"><a href='.$href_item2.'>'.$menu_item2.'</a>', $subMenuArr2],
        $href_item3 => ['<li class="taskCard__menuList"><a href='.$href_item3.'>'.$menu_item3.'</a>', $subMenuArr3],
        $href_item4 => ['<li class="taskCard__menuList"><a href='.$href_item4.'>'.$menu_item4.'</a>', $subMenuArr4],
        $href_item5 => ['<li class="taskCard__menuList"><a href='.$href_item5.'>'.$menu_item5.'</a>', $subMenuArr5]
      ];

      //генерация меню на страницу
      echo '<section class="taskCard taskCard_mainMenu">
        <ul class="taskCard__menu taskCard__menu_margin">';

      foreach ($menuArray as $menuArray_item) {
        echo $menuArray_item[0];

        if (count($menuArray_item) > 1) {      
          echo '<div class="taskCard__subMenuWrap">
          <ul class="taskCard__subMenu taskCard__subMenu_hidden">';

          foreach ($menuArray_item[1] as $subMenu_item) {
            echo $subMenu_item;
          }

          echo '</ul></div>';
        }

        echo '</li>';
      }

      echo '</ul></section>';
      ?>
      
      <section class="taskCard">
        <h2 class="taskCard__title">Задание 1.</h2>
        <p class="taskCard__text">
          С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
        </p>
<!-- код для 1-го задания начинается тут -->
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
        <h2 class="taskCard__title">Задание 2.</h2>
        <p class="taskCard__text">
        С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
        0 – это ноль. <br>
        1 – нечетное число. <br>
        2 – четное число. <br>
        3 – нечетное число. <br>
        … <br>
        10 – четное число.
        </p>
<!-- код для 2-го задания начинается тут -->
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
<!-- код для 3-го задания начинается тут -->
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
<!-- код для 4-го задания начинается тут -->
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
<!-- код для 5-го задания начинается тут -->
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
        <h2 class="taskCard__title">Задание 6.</h2>
        <p class="taskCard__text">
          В имеющемся шаблоне сайта заменить статичное меню (ul - li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.
        </p>

        <!-- меню выполнено в первом <section> в <main> -->

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 7.</h2>
        <p class="taskCard__text">
        *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. То есть выглядеть должно так: <br>
        <code>for (…){ // здесь пусто}</code>
        </p>
<!-- код для 7-го задания начинается тут -->
        <?php
        for ($i = 0; $i < 10; print_r($i++.", ")) { /*здесь пусто*/ }
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 8.</h2>
        <p class="taskCard__text">
          *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
        </p>
<!-- код для 8-го задания начинается тут -->
        <?php
        echo "<code>";

        foreach ($citiesArray as $key => $value) {
          foreach ($citiesArray[$key] as $value) {
            if (mb_substr($value, 0, 1,"utf-8") == 'К') {
              echo $value . '</br>';
            }
          }
        }

        echo "</code>";
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">Задание 9.</h2>
        <p class="taskCard__text">
          *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).
        </p>
<!-- код для 9-го задания начинается тут -->
        <?php
        echo "вариант 1.";
        echo "<br>";
        echo "<code>";
        echo convertSpaces(translitString($testStringText));
        echo "</code>";

        echo "<br>";
        echo "вариант 2.";
        echo "<br>";
        echo "<code>";
        echo trnsTxtWithSpaces($testStringText);
        echo "</code>";        

        function trnsTxtWithSpaces($txtWithSpacesToTrns)
        {
          $txtWithSpacesToTrns = translitString($txtWithSpacesToTrns);
          $txtWithSpacesToTrns = convertSpaces($txtWithSpacesToTrns);

          return $txtWithSpacesToTrns;
        }
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