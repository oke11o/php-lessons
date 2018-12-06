<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP lesson 5</title>
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

  /*
  * init.php includes:
  *   $mysqli //connection to database
  */
  require '../core/init.php';
  ?>
</head>

<body>
  <div class="bodyWrap bodyWrap_position">
    <header>
      <?php
      //rendering main nav bar menu
      include "../modules/nav-bar.php";
      ?>      

      <h1 class='headerTitle'>Домашнее задание по курсу PHP. Урок 5.</h1>
      <p class='headerDate'><?php echo($date); ?></p>
    </header>

    <main class="bodyWrap__main">
      <div class="popup__wrap popup_hidden" id="popup-container">
        <div class="popup__crossWrap" id="popup-cross">
          <div class="popup__cross popup__cross_one"></div>
          <div class="popup__cross popup__cross_two"></div>
        </div>

        <div class="popup__control popup__control_next" id="popup-control-next">
          <img src="img/icon-arrow.svg" alt="next">
        </div>

        <div class="popup__control popup__control_prev" id="popup-control-prev">
          <img src="img/icon-arrow.svg" alt="prev">   
        </div>

        <div class="popup__slider" id="popup-slider"></div>
      </div>

      <section class="taskCard">
        <h2 class="taskCard__title">Галлерея.</h2>

        <div class="taskCard__gallery">
          <?php
          $galleryDir = 'img/gallery';          

          echo(renderGalleryImages($galleryDir));
          ?>
        </div>
      </section>

      <section class="taskCard">
        <h2>test block</h2>

        <div class="taskCard__gallery">
          <?php
          //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
          $images_house1_array = getArrayFromMySQL($mysqli, '`lesson_05`', '"House 1%"');

          include '../modules/gallery-image-render.php';

          renderImagesFromMySQL($images_house1_array);
          ?>
        </div>
      </section>
    </main>
    
    <footer>
      <div class="footerContacts">
        <div class="footerContacts__social">
          <a href="https://vk.com/dirty.mike" class="footerContacts__socIcon" target="_blank">
            <img src="img/icon-vk.svg" alt="vkontakte">
          </a>
          <a href="https://www.turbosquid.com/Search/Artists/DirtyMike" class="footerContacts__socIcon" target="_blank">
            <img src="img/icon-ts.png" alt="turbosquid">
          </a>
        </div>

        <div class="footerContacts__counter">
          <?php
          echo('this page opened: '.counter('visites-counter.txt').' times.');
          ?>
        </div>
      </div>

      <div class="rights">
        <span>All Rights Reserved &copy; <?php echo date('Y'); ?> Все задания выполнил Михаил Успенский.</span>
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>