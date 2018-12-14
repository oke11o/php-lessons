<?php
function renderProducts($connection)
{
  $products = getProducts($connection);

  foreach ($products as $product) {
    $product_DOMdiv = '<a href="?page=product&product_id='.$product['productID'].'" class="product">';
    $product_DOMimg = '<img src="'.$product['src'].'" class="product__img">';
    $product_DOMname = '<h3 class="product__name">'.$product['name'].'</h3>';
    $product_DOMdescription = '<p class="product__info">'.$product['description'].'</p>';
    $product_DOMprice = '<button class="product__price"><i class="fas fa-cart-plus"></i>$ '.$product['price'].'</button>';
    $product_DOMdivEnd = '</a>';

    echo($product_DOMdiv.$product_DOMimg.$product_DOMname.$product_DOMdescription.$product_DOMprice.$product_DOMdivEnd);
  }
}