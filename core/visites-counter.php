<?php
//counter for visitesof current product
function clickCounter($connection, $id)
{
  $request = 'SELECT `views` FROM `gallery` WHERE `productID` = "'.(int)$id.'" AND `type` LIKE "%preview%";';
  $views = mysqli_fetch_assoc(mysqli_query($connection, $request));
  
  $number = $views['views'];
  $number++;
  
  $request = 'UPDATE `gallery` SET `views` = "'.$number.'" WHERE `gallery`.`productID` = "'.(int)$id.'";';
  mysqli_query($connection, $request);

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