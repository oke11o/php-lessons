<?php
function clickCounter($id)
{
  $views = mysqli_query($mysqli, 'SELECT `views` FROM `lesson_05` WHERE `id` = '.$id.';');

  foreach ($views as $view) {
    $numOfView = (int)$view['views'];
  }

  $numOfView++;

  mysqli_query($mysqli, 'UPDATE `lesson_05` SET `views` = \'$numOfView\' WHERE `lesson_05`.`id` = '.$id.';');
}