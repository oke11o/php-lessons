<?php
session_start();
//include all modules and files here
require_once 'get-files-array.mysql.php';
require_once '../config/init.config.php';
require_once 'auth.php';

//this page includes $_POST functions for feedback, upload and login forms
require_once 'page-selector.php';

require_once 'products.php';
require 'cart.php';

include_once 'main-date.php';
include_once 'math-functions.php';
include_once 'visites-counter.php'; //functions to count visites of current page
include_once 'nav-bar-active-item.php';

include '../modules/gallery-render.php'; //rendering function for products
include '../modules/feedbacks-show.php'; //function to show feedbacks from array
include '../modules/nav-bar-menu.php'; //menu array