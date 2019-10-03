<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="zh-tw">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" type="text/css" href="css/<?= $_SESSION['layout'] ?>.css">
</head>

<body>
  <div class="card-main">
    <img src="upload/<?= $_SESSION['who']['name'] ?>" class="who">
    <h2>關於
      <span class="clr"><?= $_SESSION['user'] ?></span>
    </h2>
    <h4 class="clr"><?= $_SESSION['title'] ?></h4>
    <hr class="hr">
    <p><?= $_SESSION['skill'] ?></p>
    <div class="box"><?= $_SESSION['mail'] ?></div>
    <div class="box"><?= $_SESSION['phone'] ?></div>
    <button style="margin:50px auto;display:block" onclick="window.history.go(-1)">回頁面</button>
  </div>
  <?php
  session_unset();
  session_destroy();
  ?>
</body>

</html>
