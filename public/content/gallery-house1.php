<?php
//add navigations button for other galleries
include '../modules/gallery-nav.php';
?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title">House type 1</h2>

  <div class="taskCard__gallery">
    <?php
    //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
    $images_house1_array = getArrayFromMySQL($mysqli, "SELECT * FROM `gallery` WHERE `type` LIKE 'house1%' ORDER BY `views` DESC");

    //call rendering function of images on this page
    renderImagesFromMySQL($images_house1_array);
    ?>
  </div>  
</section>