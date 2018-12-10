<?php
//connection to database
$mysql_config = include_once '../config/config.mysql.php';

$mysqli = mysqli_connect($mysql_config['db-localhost'],
  $mysql_config['db-user'],
  $mysql_config['db-password'],
  $mysql_config['db-database']
);

//include all modules and files here
require_once 'get-files-array.mysql.php';
include_once 'main-date.php';
include_once 'math-functions.php';
include_once 'visites-counter.php'; //functions to count visites of current page

include '../modules/gallery-image-render.php'; //rendering function for images
include '../modules/nav-bar-menu.php'; //menu array
