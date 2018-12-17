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

function getProductsPreview($connection)
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

function getProductData($connection, $product_id)
{
  $request = "SELECT * FROM `gallery` WHERE `type` LIKE '%preview%' AND `productID` = '$product_id';";
  $request_imgs = "SELECT `src` FROM `gallery` WHERE `productID` = '$product_id';";

  $result = mysqli_fetch_assoc(mysqli_query($connection, $request));
  $result_imgs = mysqli_query($connection, $request_imgs);

  $result_but = $result['src'];
  $result['src'] = [] ;

  foreach ($result_imgs as $img) {
    if ($img['src'] == $result_but) { continue; }

    $result['src'][] = $img['src'];
  }

  return $result;
}