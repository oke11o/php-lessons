<?php

function counter($filename)
{
  $file = fopen('../resources/'.$filename, 'c');
  $counter = (int)file_get_contents('../resources/'.$filename);

  if (!$counter) {
    $counter = 1;
    fwrite($file, $counter);
    fclose($file);
  } else {
    $counter++;
    fwrite($file, $counter);
    fclose($file);
  }
  
  return $counter;
}