<?php
$product_id = $_GET['product_id'];
$product_data = getProductData($mysqli, $product_id); //assoc_array
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
  </div>  
</section>