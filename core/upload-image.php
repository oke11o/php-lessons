<?php
$image_type = $_POST['upload_type'] ?? '';
$image_name = $_POST['upload_name'] ?? '';
$image_description = $_POST['upload_description'] ?? '';
$image_dir = 'img/gallery/';

if ($image_type && $image_name) {
  $image_src = $_FILES['upload-image']['name'];

  if (move_uploaded_file($_FILES['upload-image']['tmp_name'], $image_dir.$image_src)) {
    header('Location: ?page=upload');

    $image_file = $image_dir.$image_src;

    mysqli_query($mysqli,
    "INSERT INTO gallery (type, name, src, description)
    VALUES
    ('$image_type', '$image_name', '$image_file', '$image_description');");
  }
}