<?php
function renderProducts($connection)
{
  $products = getProducts($connection);

  foreach ($products as $product) {
    $divElementOpen = '<a href="?page=product&product_id='.$product['id'].'" class="taskCard__imgWrap spawn-image">';
    $imgElement = '<img src="'.$product['src'].'" class="taskCard__img" data-number="'.$product['id'].'">';    
    $divViews = '<span class="image-views">'.$product['views'].'</span>';
    $imgElementText = '<span>'.$product['name'].'</span>';
    $divElementClose = '</a>';

    echo($divElementOpen.$imgElement.$divViews.$imgElementText.$divElementClose);
  }
}