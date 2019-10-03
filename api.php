<?php
  session_start();
  $_SESSION['user'] = $_POST['user'];
  $_SESSION['title'] = $_POST['title'];
  $_SESSION['skill'] = $_POST['skill'];
  $_SESSION['mail'] = $_POST['mail'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['who'] = $_FILES['who'];
  $_SESSION['layout'] = $_POST['layout'];
  print_r($_FILES);
  copy($_FILES['who']['tmp_name'], "upload/" . $_FILES['who']['name']);
  header('location:preview.php');
?>
