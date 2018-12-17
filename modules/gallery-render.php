<?php
function renderProducts($connection)
{
  $products = getProducts($connection);

  foreach ($products as $product):
  ?>
    <div class="productWrapper">
      <a href="?page=product&product_id=<?=$product['productID']?>" class="product">
        <img src="<?=$product['src']?>" class="product__img">
        <h3 class="product__name product__name_inGrid"><?=$product['name']?></h3>
        <p class="product__info"><?=$product['description']?></p>
        <span class="product__price">$ <?=$product['price']?></span>
      </a>      

      <form class="product__buyWrap" method="post" action="?page=gallery">
        <input name="product" type="text" hidden value="<?=$product['productID']?>">
        <button class="product__buyButton">купить</button>
      </form>
    </div>

  <?php endforeach;
} 