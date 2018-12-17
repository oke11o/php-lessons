<?php
//connection to database
$mysql_config = require_once '../config/config.mysql.php';

$mysqli = mysqli_connect($mysql_config['db-host'],
  $mysql_config['db-user'],
  $mysql_config['db-password'],
  $mysql_config['db-database']
);