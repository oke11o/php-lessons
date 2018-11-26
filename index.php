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