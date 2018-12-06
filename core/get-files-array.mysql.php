<?php
function getArrayFromMySQL($connection, $table_name, $name)
{
  $names = [];
  $src = [];
  $array = mysqli_query($connection, "SELECT * FROM ".$table_name." WHERE name LIKE ".$name);
  
  foreach ($array as $arrayObj) {
    $names[] = $arrayObj['name'];
    $src[] = $arrayObj['src'];
  }

  return ['names' => $names, 'src' => $src];
}