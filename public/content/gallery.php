<?php
//add navigations button for other galleries
include '../modules/gallery-nav.php';
?>

<section class="taskCard taskCard_gallery">
  <h2 class="taskCard__title">Галерея</h2>

  <div class="productsWrap">
    <?php renderProducts($mysqli); ?>
  </div>
</section>