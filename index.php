<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    $title = 'php-lesson-02';
    echo "<title>$title</title>";
    ?>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="dmicon.ico">
</head>

<body>
  <div class="bodyWrap bodyWrap_position">
    <header>
      <?php
      $headTitle = 'Домашнее задание по курсу PHP. Урок 2.';
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
        <h2 class="taskCard__title">test block 1.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php

        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 2.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php

        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 3.</h2>
        <p class="taskCard__text">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis quasi molestias reprehenderit deleniti quis. Facilis at vel, sequi ex consequuntur voluptate, eligendi non vero eius pariatur totam ullam obcaecati itaque explicabo fugit nemo saepe esse? Ad impedit sapiente voluptatem placeat sed magni repellendus aliquid dolores. Reprehenderit distinctio blanditiis rerum culpa.
        </p>

        <?php
        
        ?>

      </section>

      <section class="taskCard">
        <h2 class="taskCard__title">test block 4.</h2>
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