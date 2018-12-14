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
  case 'logout':
    logout();
    break;
  default: $currentPage = 'content/main.php';
}