<?php
//include all modules and files here
require_once '../core/get-files-array.php'; //include function to get array of files
require_once '../core/get-files-array.mysql.php';
include_once '../core/main-date.php';

include_once '../modules/gallery-img-render.php'; //include function to render images from array
include_once '../modules/visites-counter.php';

//connection to database
$mysql_config = include_once '../config/config.mysql.php';

$mysqli = mysqli_connect($mysql_config['db-localhost'],
  $mysql_config['db-user'],
  $mysql_config['db-password'],
  $mysql_config['db-database']
);