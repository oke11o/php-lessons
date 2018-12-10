<div class="wrapper">
  <a href="?page=gal_one" class="functionButton">House type 1</a>
</div>

<section class="taskCard">
  <h2 class="taskCard__title">House type 2.</h2>

  <div class="taskCard__gallery">
    <?php
    //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
    $images_house2_array = getArrayFromMySQL($mysqli, '`lesson_05`', '"House 2%"');

    //call rendering function of images on this page
    renderImagesFromMySQL($images_house2_array); 

    //call function to count number of views for this gallery
    $house2_array_length = count($images_house2_array['id']);

    for ($house2_i = (int)$images_house2_array['id'][0]; $house2_i <= ($house2_array_length + $images_house2_array['id'][0]); $house2_i++) {
      clickCounter($mysqli, $house2_i);
    }
    ?>
  </div>
</section>