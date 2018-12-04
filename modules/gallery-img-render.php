<?php
function renderGalleryImages($imgDir)
{
  //include function to get array of images
  include '../core/get-files-array.php';

  //function to get array of images
  $imgArray = initFilesArray($imgDir);

  //allowed file types for gallery
  $galImgTypes = ['jpg', 'jpeg', 'png', 'gif'];
  $trSymbolsFrom = ["-0", "-", "_"];
  $trSymbols = ["-0" => " ", "-" => " ", "_" => " "];

  $i = 0;

  foreach($imgArray as $img) {
    $img_parts = explode('.', $img);
    $curImgExt = strtolower(array_pop($img_parts));
    $curImgName = strtolower(array_shift($img_parts));

    //if space as first symbol then delete space
    if (in_array(substr($curImgName, 0, 1), $trSymbolsFrom)) {
      $curImgName = ucfirst(substr($curImgName, 1));
    } else {
      $curImgName = ucfirst($curImgName);
    }

    $curImgName = strtr($curImgName, $trSymbols);

    //if img type incorrect or it isn't a file then continue to next step of foreach;
    if ((!in_array($curImgExt, $galImgTypes)) || ($img == '.') || ($img == '..')) {
      continue;
    }

    echo('<div class="taskCard__imgWrap spawn-image">');
    echo('<img src="'.$imgDir.'/'.$img.'" alt="'.$i.'" class="taskCard__img">');
    echo('<span>'.$curImgName.'</span>');
    echo('</div>');

    $i++;
  }
}