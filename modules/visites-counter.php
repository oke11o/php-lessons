<?php
function counter($filename)
{
  $file = fopen('../resources/'.$filename, 'c');
  $counter = (int)file_get_contents('../resources/'.$filename);

  $counter++;

  file_put_contents('../resources/'.$filename, $counter);

  fclose($file);
  
  return $counter;
}