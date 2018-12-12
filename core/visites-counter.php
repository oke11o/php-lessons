<?php
//counter for visitesof current product
function clickCounter($connection, $id)
{
  $views = mysqli_fetch_assoc(mysqli_query($connection, 'SELECT `views` FROM `gallery` WHERE `id` = '.(int)$id.';'));
  
  $number = $views['views'];
  $number++;
  
  mysqli_query($connection, 'UPDATE `gallery` SET `views` = "'.$number.'" WHERE `gallery`.`id` = '.(int)$id.';');

  return $number;
}

//counter for visites on page
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