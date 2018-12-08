<?php
function clickCounter($connection, $id)
{
  $views = mysqli_query($connection, 'SELECT `views` FROM `lesson_05` WHERE `id` = '.$id.';');

  foreach ($views as $view) {
    $numOfView = (int)$view['views'];
  }

  $numOfView++;
  
  mysqli_query($connection, 'UPDATE `lesson_05` SET `views` = "'.$numOfView.'" WHERE `lesson_05`.`id` = '.$id.';');
}