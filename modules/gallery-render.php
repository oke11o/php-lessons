<?php
function renderProducts($connection)
{
  $products = getProductsPreview($connection);

  foreach ($products as $product):
  ?>
    <div class="productWrapper">
      <a href="?page=product&product_id=<?=$product['productID']?>" class="product">
        <img src="<?=$product['src']?>" class="product__img">
        <h3 class="product__name product__name_inGrid"><?=$product['name']?></h3>
        <p class="product__info"><?=$product['description']?></p>
        <span class="product__price">$ <?=$product['price']?></span>
      </a>      

      <div class="product__buyWrap product__buyWrap_dynamic">
        <?php if (isItemIncart($product['productID'])): ?>

        <a href="?page=delete&product_id=<?=$product['productID']?>&redirect=<?=$_GET['page']?>" class="product__buyButton product__buyButton_dynamic">удалить</a>

        <?php else: ?>

        <a href="?page=add_to_cart&product_id=<?=$product['productID']?>&redirect=<?=$_GET['page']?>" class="product__buyButton product__buyButton_dynamic">купить</a>

        <?php endif; ?>
      </div>
    </div>

  <?php endforeach;
} 