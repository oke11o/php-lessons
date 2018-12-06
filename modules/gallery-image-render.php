<?php
function renderImagesFromMySQL($array)
{
  $arrayLength = count($array['src']);
  
  for ($i = 0; $i < $arrayLength; $i++) {
    $divElementOpen = '<div class="taskCard__imgWrap spawn-image">';
    $imgElement = '<img src="'.$array['src'][$i].'" alt="'.$i.'" class="taskCard__img" data-number="'.$array['id'][$i].'">';
    $imgElementText = '<span>'.$array['names'][$i].'</span>';
    $divElementClose = '</div>';

    echo($divElementOpen.$imgElement.$imgElementText.$divElementClose);
  }
}