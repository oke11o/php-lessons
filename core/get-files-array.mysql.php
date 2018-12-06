<?php
function getArrayFromMySQL($connection, $table_name, $name)
{
  $names = [];
  $src = [];
  $array = mysqli_query($connection, "SELECT * FROM ".$table_name." WHERE name LIKE ".$name);
  
  foreach ($array as $arrayObj) {
    if (array_key_exists('name', $arrayObj)) {
      $names[] = $arrayObj['name'];
    } else {
      $names['no data'] = 'No name data in database.';
    }
    if (array_key_exists('name', $arrayObj)) {
      $src[] = $arrayObj['src'];
    } else {
      $src['no data'] = 'No path data in database.';
    }
  }
  
  return ['names' => $names, 'src' => $src];
}