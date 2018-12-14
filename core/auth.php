<?php
//registration
//===============================================================
$regLoginMessage = '';
$regEmailMessage = '';
$regPasswordMessage = '';
$reg_id = $_POST['reg_id'] ?? '';
$reg_name = $_POST['reg_name'] ?? '';
$reg_email = $_POST['reg_email'] ?? '';
$reg_password = $_POST['reg_password'] ?? '';
$reg_confirm_pw = $_POST['reg_confirm_pw'] ?? '';
$regState = false;

if ($reg_id && $reg_name && $reg_email && $reg_password && $reg_confirm_pw) {
  $reg_confirm_pw = password_hash($_POST['reg_confirm_pw'], PASSWORD_ARGON2I);

  if (checkUserLogin($mysqli, $reg_id)) {
    $regLoginMessage = ' - Этот логин уже используется, придумайте другой.';
  }

  if (checkUserEmail($mysqli, $reg_email)) {
    $regEmailMessage = ' - Этот e-mail адрес уже используется.';
  }

  if (!password_verify($reg_password, $reg_confirm_pw)) {
    $regPasswordMessage = ' - Пароли не совпадают.';
  }
  
  if (password_verify($reg_password, $reg_confirm_pw) && !checkUserLogin($mysqli, $reg_id) && !checkUserEmail($mysqli, $reg_email)) {
    $regLoginMessage = '';
    $regEmailMessage = '';
    $regPasswordMessage = '';

    $reg_password_hash = password_hash($reg_password, PASSWORD_ARGON2I);
    
    $regState = createUser($mysqli, $reg_id, $reg_email, $reg_name, $reg_password_hash);
  }
} else {
  $regLoginMessage = '';
  $regEmailMessage = '';
  $regPasswordMessage = '';
}

function checkUserLogin($connection, $user_id)
{
  $request = "SELECT * FROM `users` WHERE `login` = '$user_id';";

  $result = mysqli_fetch_assoc(mysqli_query($connection, $request));

  return $result;
}

function checkUserEmail($connection, $user_email)
{
  $request = "SELECT * FROM `users` WHERE `email` = '$user_email';";

  $result = mysqli_fetch_assoc(mysqli_query($connection, $request));

  return $result;
}

function createUser($connection, $id, $email, $name, $password)
{
  $request = "INSERT INTO `users` (login, email, name, password_hash, privileges) VALUES ('$id', '$email', '$name', '$password', 'NONE');";

  $result = mysqli_query($connection, $request);

  return $result;
}

//authorization
//===============================================================

$loginMessage = '';
$login_id = $_POST['login_id'] ?? '';
$login_password = $_POST['login_password'] ?? '';

//if registration was successfull then login
if ($regState) {
  $login_id = $reg_id;
  $login_password = $reg_password;

  $regState = false;
}

if (($login_id && $login_password)) {
  $authState = authorizeUser($mysqli, $login_id, $login_password); 

  if ($authState) {    
    $loginMessage = '';    
    $authState = false;
    $user_privileges = checkUserPrivileges($mysqli, $login_id);

    $_SESSION['user_id'] = $login_id;
    $_SESSION['user_privileges'] = $user_privileges['privileges'];

    header('Location: ?page=main');
  } elseif (!$authState && $login_id && $login_password) {
    $loginMessage = 'Invalid login or password';
  }
}

function authorizeUser($connection, $name, $password) {
  $request = "SELECT `password_hash` FROM `users` WHERE `login` = '$name'";
  $password_hash = mysqli_fetch_assoc(mysqli_query($connection, $request));
  $hash = $password_hash['password_hash'];
  
  return password_verify($password, $hash);
}

//check current user privileges
//===============================================================
function checkUserPrivileges($connection, $user_id)
{
  $request = "SELECT `privileges` FROM `users` WHERE `login` = '$user_id';";

  $result = mysqli_fetch_assoc(mysqli_query($connection, $request));

  return $result;
}

//logout
//===============================================================
function logout()
{
  if (isset($_GET['product_id'])) {
    header('Location: ?page=product&product_id='.$_GET['product_id']);
  } elseif ($_GET['redirect'] == 'profile') {
    header('Location: ?page=login');
  } else {
    header('Location: ?page='.$_GET['redirect']);
  }
    
  unset($_SESSION['user_id']);
  unset($_GET['redirect']);
  unset($_SESSION['user_privileges']);
}