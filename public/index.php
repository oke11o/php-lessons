<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP lesson 6</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="dmicon.ico">
  <?php  
  /*
   * --- reserved classes list ---
   * .sub-menu
   *   resereved for js to initialize menu with dropdown sub-menu
   * .spawn-image
   *   reserved for js to initialize all spawned images
   * .image-views
   *   reserved for js to initialize views of current image
   */
  error_reporting(E_ALL);

  /*
   * init.php includes:
   *   $mysqli //connection to database
   */
  $page = $_GET['page'] ?? 'main';

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

      <h1 class='headerTitle'>Домашнее задание по курсу PHP. Урок 6.</h1>
      <p class='headerDate'><?php echo ($date); ?></p>
    </header>

    <main class="bodyWrap__main">      
      <?php
      $currentPage = '';

      switch ($page) {
        case 'gal1':
          $currentPage = 'content/gallery-house1.php';
          break;        
        case 'gal2':
          $currentPage = 'content/gallery-house2.php';
          break;        
        case 'product':
          $currentPage = 'content/product-page.php';
          break;        
        case 'contacts':
          $currentPage = 'content/contacts.php';
          break;                
        case 'feedback':
          $currentPage = 'content/feedback.php';
          break;
        default: $currentPage = 'content/main.php';
      }

      require($currentPage);
      ?>      
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
          This page visited: <?=visitesCounter($mysqli, $page);?> times.
        </div>
      </div>

      <div class="rights">
        <span>All Rights Reserved &copy; <?= date('Y'); ?> Все задания выполнил Михаил Успенский.</span>
      </div>
    </footer>
  </div>
  <script src="js/script.js"></script>
</body>

</html>