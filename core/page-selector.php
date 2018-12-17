<?php
$page = $_GET['page'] ?? 'main';

switch ($page) {
  case 'gallery':
    $currentPage = 'content/gallery.php';
    break;       
  case 'product':
    $currentPage = 'content/product-page.php';
    break;                        
  case 'upload':
    require 'upload-image.php';
    $currentPage = 'content/upload.php';
    break;
  case 'contacts':
    $currentPage = 'content/contacts.php';
    break;                
  case 'feedback':
    require 'feedback-create.php';
    $currentPage = 'content/feedback.php';
    break;                              
  case 'login':
    $currentPage = 'content/login.php';
    break;                                  
  case 'profile':
    require 'profile-user.php';
    $currentPage = 'content/profile.php';
    break;
  case 'logout':
    logout();
    break;
  case 'add_to_cart':
    require 'cart.php';
    addToCart($_GET['product_id']);
    break;
  case 'delete':
    require 'cart.php';
    deleteFromCart($_GET['product_id']);
    break;
  default: $currentPage = 'content/main.php';
}