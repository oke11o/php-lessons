<h2 class="taskCard__title">Галлерея.</h2>

<div class="taskCard__gallery">
  <?php
  //'names' => ['name 1', ... 'name n'], 'src' => ['path 1', ... 'path n']
  $images_house2_array = getArrayFromMySQL($mysqli, '`lesson_05`', '"House 2%"');

  include '../modules/gallery-image-render.php';

  renderImagesFromMySQL($images_house2_array);
  ?>
</div>