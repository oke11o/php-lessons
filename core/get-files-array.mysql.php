<?php
function getArrayFromMySQL($connection, $table_name, $name)
{
  $names = [];
  $src = [];
  $clicks = [];
  $id = [];

  $array = mysqli_query($connection, "SELECT * FROM ".$table_name." WHERE name LIKE ".$name);
  
  foreach ($array as $arrayObj) {
    if (array_key_exists('name', $arrayObj)) {
      $names[] = $arrayObj['name'];
    } else {
      $names['no data'] = 'No name data in database.';
    }

    if (array_key_exists('src', $arrayObj)) {
      $src[] = $arrayObj['src'];
    } else {
      $src['no data'] = 'No path data in database.';
    }

    if (array_key_exists('views', $arrayObj)) {
      $clicks[] = $arrayObj['views'];
    } else {
      $clicks['no data'] = 'No path data in database.';
    }

    if (array_key_exists('id', $arrayObj)) {
      $id[] = $arrayObj['id'];
    } else {
      $id['no data'] = 'No path data in database.';
    }
  }
  
  return ['id' => $id, 'names' => $names, 'src' => $src, 'views' => $clicks];
}