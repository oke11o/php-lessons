<?php
$product_id = $_GET['product_id'];
$product_data = getProductData($mysqli, $product_id); //assoc_array
$_SESSION['last-opened-product'] = $product_id;
?>

<section class="taskCard taskCard_width">
  <h2 class="taskCard__title"><?=$product_data['name']?></h2>

  <div class="productPage">
    <div class="productPage__imgPreview">
      <img src="<?=$product_data['src'][0]?>" alt="<?=$product_data['type']?>">
    </div>

    <div class="productPage__imagesWrap">
      <?php foreach ($product_data['src'] as $product_imgSrc): ?>      
      <img src="<?=$product_imgSrc?>" alt="<?=$product_data['type']?>">
      <?php endforeach; ?>
    </div>

    <p><?=$product_data['description']?></p>
    <p><?=$product_data['details']?></p>
    <p><?=$product_data['productID']?></p>
    
    <?php if (isItemIncart($product_data['productID'])): ?>

    <a href="?page=delete&product_id=<?=$product_data['productID']?>&redirect=<?=$_GET['page']?>" class="product__buyButton product__buyButton_productPage">удалить</a>

    <?php else: ?>

    <a href="?page=add_to_cart&product_id=<?=$product_data['productID']?>&redirect=<?=$_GET['page']?>" class="product__buyButton product__buyButton_productPage">купить</a>

    <?php endif; ?>
  </div>  
</section>