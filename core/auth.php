<?php
//authorization
//===============================================================

$loginMessage = '';
$login_id = $_POST['login_id'] ?? '';
$login_password = $_POST['login_password'] ?? '';

if ($login_id && $login_password) {
  $authState = authorizeUser($mysqli, $login_id, $login_password);

  if ($authState) {    
    $loginMessage = '';
    
    $_SESSION['user_id'] = $login_id;

    header('Location: ?page=main');
  } elseif (!$authState) {
    $loginMessage = 'Invalid login or password';
  }
}
//registration
//===============================================================
$regPasswordMessage = '';
// $regAction = '?page=login';
// $reg_password = $_POST['reg_password'] ?? '';
// $reg_confirm_pw = $_POST['reg_confirm_pw'] ?? '';

// if ($reg_password != $reg_confirm_pw ) {
//   $regPasswordMessage = 'Пароли не совпадают';
//   $regAction = '?page=login';
// } elseif (($reg_password == $reg_confirm_pw) && $reg_password) {
//   header('Location: ?page=main');
// }

function authorizeUser($connection, $name, $password) {
  $request = "SELECT `password_hash` FROM `users` WHERE `login` = '$name'";
  $password_hash = mysqli_fetch_assoc(mysqli_query($connection, $request));
  $hash = $password_hash['password_hash'];
  
  if (password_verify($password, $hash)) {
    return true;
  } else {
    return false;
  }
}