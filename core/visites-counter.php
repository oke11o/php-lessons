<?php

function clickCounter($connection, $id)
{
  $views = mysqli_fetch_assoc(mysqli_query($connection, 'SELECT `views` FROM `lesson_05` WHERE `id` = '.$id.';'));
  
  $number = $views['views'];
  $number++;
  
  mysqli_query($connection, 'UPDATE `lesson_05` SET `views` = "'.$number.'" WHERE `lesson_05`.`id` = '.$id.';');

  return $number;
}

function visitesCounter($connection, $pageID)
{
  if ($pageID != 'product') {
    $views = mysqli_fetch_assoc(mysqli_query($connection, "SELECT `views` FROM `visites` WHERE `page` = '$pageID';"));

    $number = $views['views'];
    $number++;

    mysqli_query($connection, "UPDATE `visites` SET `views` = $number WHERE `page` = '$pageID';");
  
    return $number;
  } else {
    return clickCounter($connection, $_GET['product_id']);
  }
}