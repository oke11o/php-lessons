<?php
function renderGalleryImages($imgDir)
{
  //include function to get array of images
  include '../core/get-files-array.php';

  //function to get array of images
  $imgArray = initFilesArray($imgDir);

  //allowed file types for gallery
  $galImgTypes = ['jpg', 'jpeg', 'png', 'gif'];

  $i = 0;

  foreach($imgArray as $img) {
    $img_parts = explode('.', $img);
    $curImgExt = strtolower(array_pop($img_parts));
    $curImgName = strtolower(array_shift($img_parts));

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