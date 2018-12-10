<?php include '../modules/gallery-nav.php'; ?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title">House type 1.</h2>

  <div class="taskCard__gallery">
    <?php
    //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
    $images_house1_array = getArrayFromMySQL($mysqli, '`lesson_05`', '"House 1%"');

    //call rendering function of images on this page
    renderImagesFromMySQL($images_house1_array);

    //call function to count number of views for this gallery
    $house1_array_length = count($images_house1_array['id']);

    for ($house1_i = (int)$images_house1_array['id'][0]; $house1_i <= $house1_array_length; $house1_i++) {
      clickCounter($mysqli, $house1_i);
    }
    ?>
  </div>  
</section>