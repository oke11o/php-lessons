<?php
//add navigations button for other galleries
include '../modules/gallery-nav.php';

//get current product id
$productID = $_GET['product_id'];

$productArray = getArrayFromMySQL($mysqli, "SELECT * FROM `gallery` WHERE `id` = ".$productID);
?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title"><?=$productArray['names'][0]?></h2>

  <div class="taskCard__gallery">
    <?php
    
    ?>
  </div>  
</section>