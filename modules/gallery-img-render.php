<?php
function renderGalleryImages($imgDir)
{
  //function to get array of images
  $imgArray = initFilesArray($imgDir);

  //allowed file types for gallery
  $galImgTypes = ['jpg', 'jpeg', 'png', 'gif'];
  $trSymbols = ["-0" => " ", "-" => " ", "_" => " ", " 0" => " "];

  $i = 0;

  foreach($imgArray as $img) {
    $img_parts = explode('.', $img);
    $curImgExt = strtolower(array_pop($img_parts));

    //if img type incorrect or it isn't a file then continue to next step of foreach;
    if ((!in_array($curImgExt, $galImgTypes)) || ($img == '.') || ($img == '..')) {
      continue;
    }

    $divElementOpen = '<div class="taskCard__imgWrap spawn-image">';
    $imgElement = '<img src="'.$imgDir.'/'.$img.'" alt="'.$i.'" class="taskCard__img">';
    $imgElementText = '<span>'.setFileName($img_parts, $trSymbols).'</span>';
    $divElementClose = '</div>';

    echo($divElementOpen.$imgElement.$imgElementText.$divElementClose);

    $i++;
  }
}

// function to translate file name to strin.
// Required array of name parts without extention
// Required array of unwanted symbols
function setFileName($nameArray, $symbolsArray)
{
  $currentName = strtolower(implode(' ', $nameArray));

  //if symbol from array as first symbol of the name then delete that symbol
  if (array_key_exists(substr($currentName, 0, 1), $symbolsArray)) {
    $currentName = ucfirst(substr($currentName, 1));
  } else {
    $currentName = ucfirst($currentName);
  }

  $currentName = strtr($currentName, $symbolsArray);

  return $currentName;
}