<?php
$page = $_GET['page'] ?? 'main';

$currentPage = setCurrentPage($page);

function setCurrentPage($page_id)
{  
  switch ($page_id) {
    case 'gallery':
      $resultPage = 'content/gallery.php';
      break;       
    case 'product':
      $resultPage = 'content/product-page.php';
      break;                        
    case 'upload':
      require 'upload-image.php';
      $resultPage = 'content/upload.php';
      break;
    case 'contacts':
      $resultPage = 'content/contacts.php';
      break;                
    case 'feedback':
      require 'feedback-create.php';
      $resultPage = 'content/feedback.php';
      break;                              
    case 'login':
      $resultPage = 'content/login.php';
      break;                                  
    case 'profile':
      require 'profile-user.php';
      $resultPage = 'content/profile.php';
      break;
    case 'logout':
      return logout(); //this function calls redirection() with header();
      break;
    case 'add_to_cart':
      require 'cart.php';
      return addToCart($_GET['product_id']); //this function calls redirection() with header();
      break;
    case 'delete':
      require 'cart.php';
      return deleteFromCart($_GET['product_id']); //this function calls redirection() with header();
      break;
    default: $resultPage = 'content/main.php';
  }

  return $resultPage;
}