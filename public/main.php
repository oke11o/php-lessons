<h2 class="taskCard__title">Главная галлерея.</h2>

<div class="taskCard__gallery">
  <?php
  include '../modules/gallery-image-render.php';

  //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
  $images_house1_array = getArrayFromMySQL($mysqli, '`lesson_05`', '"House 1%"');

  renderImagesFromMySQL($images_house1_array);

  $house1_array_length = count($images_house1_array['id']);

  for ($house1_i = (int)$images_house1_array['id'][0]; $house1_i <= $house1_array_length; $house1_i++) {
    clickCounter($mysqli, $house1_i);
  }
  ?>
</div>