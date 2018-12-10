<?php
function getArrayFromMySQL($connection, $table_name, $column, $name)
{
  $names = [];
  $src = [];
  $views = [];
  $id = [];

  $array = mysqli_query($connection, "SELECT * FROM ".$table_name." WHERE ".$column." LIKE ".$name);
  
  foreach ($array as $arrayObj) {   
    if (array_key_exists('id', $arrayObj)) {
      $id[] = $arrayObj['id'];
    }

    if (array_key_exists('name', $arrayObj)) {
      $names[] = $arrayObj['name'];
    }

    if (array_key_exists('src', $arrayObj)) {
      $src[] = $arrayObj['src'];
    }

    if (array_key_exists('views', $arrayObj)) {
      $views[] = $arrayObj['views'];
    }

    if (array_key_exists('description', $arrayObj)) {
      $description[] = $arrayObj['description'];
    } 
  }
  
  return ['id' => $id, 'names' => $names, 'src' => $src, 'views' => $views, 'description' => $description];
}