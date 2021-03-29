<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hasil</title>
  </head>
  <body>

  </body>
</html>
<?php
  if (empty($_POST['Username'])) {
    header("Location:kosong.php");//menampilkanheader yg berada di file kosong

  }else {
    echo "<center>Nama : ".$_POST['Username']."<center><br>";
  }
 ?>
