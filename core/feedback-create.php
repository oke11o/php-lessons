<?php
$fb_name = $_POST['feedback_name'] ?? '';
$fb_email = $_POST['feedback_email'] ?? '';
$fb_text = $_POST['feedback_text'] ?? '';
$fb_date = date('Y'.'-'.'m'.'-'.'d');
$fb_time = date('H'.':'.'i');

//when required fields are not null
if ($fb_name && $fb_email && $fb_text) {
  header('Location: ?page=feedback');
  
  mysqli_query($mysqli,
  "INSERT INTO feedbacks (name, email, description, date, time)
  VALUES
  ('$fb_name', '$fb_email', '$fb_text', '$fb_date', '$fb_time');");
}