<?php
$fb_name = $_POST['feedback_name'] ?? '';
$fb_email = $_POST['feedback_email'] ?? '';
$fb_text = $_POST['feedback_text'] ?? '';
$fb_date = date('Y'.'-'.'m'.'-'.'d');
$fb_time = date('H'.':'.'i');

//when required fields are not null
if ($fb_name && $fb_email && $fb_text) {
  header('Location: ?page=feedback');

  $sqlInsertFeedback = sprintf("INSERT INTO feedbacks (name, email, description, date, time)
  VALUES ('%s', '%s', '%s', '%s', '%s')",
  mysqli_real_escape_string($mysqli, (string)htmlspecialchars(strip_tags($fb_name))),
  mysqli_real_escape_string($mysqli, (string)htmlspecialchars(strip_tags($fb_email))),
  mysqli_real_escape_string($mysqli, (string)htmlspecialchars(strip_tags($fb_text))),
  $fb_date,
  $fb_time
  );

  mysqli_query($mysqli, $sqlInsertFeedback);
}