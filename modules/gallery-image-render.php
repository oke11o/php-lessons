<?php
function renderImagesFromMySQL($array)
{
  $arrayLength = count($array['src']);
  
  for ($i = 0; $i < $arrayLength; $i++) {
    $divElementOpen = '<a href="?page=product&product_id='.$array['id'][$i].'" class="taskCard__imgWrap spawn-image">';
    $imgElement = '<img src="'.$array['src'][$i].'" alt="'.$i.'" class="taskCard__img" data-number="'.$array['id'][$i].'">';    
    $divViews = '<span class="image-views">'.$array['views'][$i].'</span>';
    $imgElementText = '<span>'.$array['names'][$i].'</span>';
    $divElementClose = '</a>';

    echo($divElementOpen.$imgElement.$divViews.$imgElementText.$divElementClose);
  }
}