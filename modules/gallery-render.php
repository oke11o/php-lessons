<?php
function renderProducts($connection)
{
  $products = getProducts($connection);

  foreach ($products as $product):
  ?>

    <a href="?page=product&product_id=<?=$product['productID']?>" class="product">
      <img src="<?=$product['src']?>" class="product__img">
      <h3 class="product__name"><?=$product['name']?></h3>
      <p class="product__info"><?=$product['description']?></p>
      <span class="product__price">$ <?=$product['price']?></span>
    </a>

  <?php endforeach;
} 