<?php
//add navigations button for other galleries
include '../modules/gallery-nav.php';

//get current product id
$productID = $_GET['product_id'];

$productName = getArrayFromMySQL($mysqli, '`lesson_05`', '`id`', $productID);
?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title"><?=$productName['names'][0]?></h2>

  <div class="taskCard__gallery">
    <?php
    //count views of current product
    // clickCounter($mysqli, $productID);
    ?>
  </div>  
</section>