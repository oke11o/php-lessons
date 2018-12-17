<?php
$addToCartID = $_POST['product'] ?? '';

if ($addToCartID) {
  addToCart($addToCartID);
}

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

  <section class="cart">
    <h3 class="cart__title">Корзина</h3>

    <?php
    foreach ($_SESSION['cart'] as $cart_id):
      foreach ($products as $product):
        if ($cart_id != $product['productID']) {
          continue;
        }

        $totalPrice += (float)$product['price'];
        $count++;
        ?>

        <div class="cart__item">
          <h4><?=$product['name']?></h4>
          <span>ID: <a href="?page=product&product_id=<?=$product['productID']?>"><?=$product['productID']?></a></span>
          <span>price: $ <?=$product['price']?></span>
          <a href="?page=clear&product_id=<?=$product['productID']?>">x</a>
        </div>

        <?php
      endforeach;
    endforeach;
    ?>

    <span>Итого: <?=$count?> товара на сумму $ <?=$totalPrice?></span>
  </section>
  
  <?php
}