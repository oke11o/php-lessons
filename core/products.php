<?php
function productsName($connection)
{
  $namesArray = [];
  $request = 'SELECT * FROM `gallery`';
  $name = '';
  $prevName = '';

  $productData = mysqli_query($connection, $request);

  foreach ($productData as $array) {
    $type = explode(' ', $array['type']);
    $length = count($type);

    if ($length > 1) {
      $name = array_shift($type);
    } else {
      $name = $array['type'];
    }

    if ($name == $prevName) {
      continue;
    } else {
      $namesArray[] = $name;
      $prevName = $name;
    }
  }

  return $namesArray;
}

function getProducts($connection)
{
  $array = [];
  $types = productsName($connection);

  foreach ($types as $type) {
    $request = "SELECT * FROM `gallery` WHERE `type` = '$type preview'";
    $products = mysqli_fetch_assoc(mysqli_query($connection, $request));

    $array[] = $products;
  }

  return $array;
}