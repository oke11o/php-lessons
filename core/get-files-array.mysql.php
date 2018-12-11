<?php
function getArrayFromMySQL($connection, $SQLphrase)
{
  $result = [];

  $array = mysqli_query($connection, $SQLphrase);

  foreach ($array as $arrayItem) {
    if (array_key_exists('id', $arrayItem)) {
      $result['id'][] = $arrayItem['id'];
    }

    if (array_key_exists('name', $arrayItem)) {
      $result['names'][] = $arrayItem['name'];
    }

    if (array_key_exists('src', $arrayItem)) {
      $result['src'][] = $arrayItem['src'];
    }

    if (array_key_exists('views', $arrayItem)) {
      $result['views'][] = $arrayItem['views'];
    }

    if (array_key_exists('description', $arrayItem)) {
      $result['description'][] = $arrayItem['description'];
    }
    
    if (array_key_exists('date', $arrayItem)) {
      $result['date'][] = $arrayItem['date'];
    }    

    if (array_key_exists('time', $arrayItem)) {
      $result['time'][] = $arrayItem['time'];
    }
  }
  
  return $result;
}