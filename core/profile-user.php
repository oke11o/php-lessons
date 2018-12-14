<?php
function getUserData($connection, $user_id)
{
  $request = "SELECT * FROM `users` WHERE `login` = '$user_id';";

  $result = mysqli_fetch_assoc(mysqli_query($connection, $request));

  return $result;
}

$user_data = getUserData($mysqli, $_SESSION['user_id']);