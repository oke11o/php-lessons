<?php
//add navigations button for other galleries
include '../modules/gallery-nav.php';
?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title">Галерея</h2>

  <div class="taskCard__gallery">
    <?php
    renderProducts($mysqli);
    ?>
  </div>  
</section>