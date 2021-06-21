<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TEST KONEKSI </title>
  </head>
  <body>
    <h1>Demo koneksi database</h1><!--paragraph-->
    <?php
      $con=mysqli_connect("localhost","root","");//berfungsi sebagai pengidentifikasi koneksi database

      if (mysqli_connect_error()) {
        echo "Failed to connect mysql: ".mysqli_connect_error();//jika gagal terkoneksi maka akan tampil Failed
        exit();
      }
     ?>
  </body>
</html>
