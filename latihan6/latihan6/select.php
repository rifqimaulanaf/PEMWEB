<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="mydb2";

    $connect=mysqli_connect($servername,$username,$password,$dbname);
    if (!$connect) {
      die ("Connection error: ".mysqli_connect_error());
    }
      $sql="SELECT id,kode,negara,champion FROM liga";
      $result=mysqli_query($connect,$sql);
      if (mysqli_num_rows($result)> 0 ) {
        while ($row=mysqli_fetch_assoc($result)) {
          echo $row["id"]." ".$row["kode"]." - Negara: ".$row["negara"]." "."menang: ".$row["champion"]."<br>";

        }
      }else {
        echo "0 result";
      }
      mysqli_close($connect)
     ?>
  </body>
</html>
