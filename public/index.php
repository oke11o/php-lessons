<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP lesson 04</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="dmicon.ico">
  <?php  
  /*
  * --- reserved classes list ---
  * .sub-menu
  *   resereved for js to initialize menu with dropdown sub-menu
  * .spawn-image
  *   reserved for js to initialize all spawned images
  */
  error_reporting(E_ALL);
  ?>
</head>

<body>
  <div class="bodyWrap bodyWrap_position">
    <header>

      <?php
      include "../modules/nav-bar.php";
      include "../core/main-date.php";
      ?>      

      <h1 class='headerTitle'>Домашнее задание по курсу PHP. Урок 4.</h1>
      <p class='headerDate'><?php echo($date); ?></p>
    </header>

    <main class="bodyWrap__main">
      <section class="popup__wrap" id="popup-slider">

      </section>
      <section class="taskCard">
        <h2 class="taskCard__title">Галлерея.</h2>

        <div class="taskCard__gallery">
          <?php
          require '../core/images-spawn.php';

          $galleryDir = 'img/gallery';

          spawnImages($galleryDir);
          ?>
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