<?php
function redirection($location)
{
  if ($location == 'product') {
    header('Location: ?page=product&product_id='.$_SESSION['last-opened-product']);
  } else {
    header('Location: ?page='.$location);
  }
}