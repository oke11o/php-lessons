<?php
function spawnImages($spawnDirectory)
{
  $directoryOpen = opendir($spawnDirectory); //gallery directory
  $galleryTypes = ['jpg', 'jpeg', 'png', 'gif']; //allowed file types for gallery

  while ($galleryImage = readdir($directoryOpen)) {
    $galleryImage_parts = explode('.', $galleryImage);
    $currentFileExt = strtolower(array_pop($galleryImage_parts));
    $currentFileName = strtolower(array_shift($galleryImage_parts));
    $currentFileName = ucfirst(strtr($currentFileName, ["-0" => " ", "-" => " ", "_" => " "]));

    if (in_array($currentFileExt, $galleryTypes)) {
      echo('<div class="taskCard__imgWrap">');
      echo('<img src="'.$spawnDirectory.'/'.$galleryImage.'" alt="img" class="taskCard__img spawn-image">');
      echo('<span>'.$currentFileName.'</span>');
      echo('</div>');
    }
  }

  closedir($directoryOpen);  
}