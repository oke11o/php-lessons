<?php
// $addToCartID = $_POST['product'] ?? '';

// if ($addToCartID) {
//   addToCart($addToCartID);
// }

function addToCart($item_id)
{
  $cartIDisset = false;

  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
  }

  foreach ($_SESSION['cart'] as $id) {
    if ($id == $item_id) {
      $cartIDisset = true;
    }
  }

  if (!$cartIDisset) {
    $_SESSION['cart'][] = $item_id;
  }
  
  redirection($_GET['redirect']);
}

function deleteFromCart($item_id)
{
  foreach ($_SESSION['cart'] as $id_key => $id) {
    if ($item_id == $id) {
      unset($_SESSION['cart'][$id_key]);
    }
  }

  if (count($_SESSION['cart']) < 1) {
    unset($_SESSION['cart']);
  }

  redirection($_GET['redirect']);
}

function renderCart($connection)
{
  if (!isset($_SESSION['cart'])) {
    return;
  }

  $products = getProducts($connection);
  $totalPrice = 0;
  $count = 0;
  ?>

  <div class="cartWrapper">
    <section class="cart cart_fixed">
      <h3 class="cart__title cart__title_fixed">Корзина</h3>

      <?php
      foreach ($products as $product):
        if (!isItemIncart($product['productID'])) {
          continue;
        }

        $totalPrice += (float)$product['price'];
        $count++;
        ?>

        <div class="cart__item">
          <h4><?=$product['name']?></h4>
          <span>ID: <a href="?page=product&product_id=<?=$product['productID']?>" class="cart__itemID"><?=$product['productID']?></a></span>
          <span class="cart__price"><b>$ <?=$product['price']?></b></span>
          <a href="?page=delete&product_id=<?=$product['productID']?>&redirect=<?=$_GET['page']?>" class="cart__remove">&times;</a>
        </div>

        <?php
      endforeach;
      ?>

      <span class="cart__total cart__total_fixed">Итого: <?=$count.' '.getStrText($count, ['товар', 'товара', 'товаров'])?> на сумму <b>$ <?=$totalPrice?></b></span>
    </section>
  </div>
  
  <?php
}

function getStrText($num, $array)
{
  $num = $num % 100;

  if ($num > 10 && $num < 20) {
    $text = $array[2];
  } else {
    $i = $num % 10;
    switch ($i) {
      case (1): $text = $array[0]; break;
      case (2):
      case (3):
      case (4): $text = $array[1]; break;
      default: $text = $array[2];
    }
  }
  return $text;
}

function isItemIncart($item_id)
{
  if (!isset($_SESSION['cart'])) {
    return false;
  }

  foreach ($_SESSION['cart'] as $cart_id) {
    if ($cart_id == $item_id) {
      return true;
    }
  }

  return false;
}