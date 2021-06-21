<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LIGA</title>
  </head>
  <body>
    <?php
      $servername="localhost";
      $username="root";
      $password="";
      $dbname="mydb2";
      $conn=mysqli_connect($servername,$username,$password,$dbname);

      if (!$conn) {
        die("connection failed: ".mysqli_connect_error() );
      }

      $sql="SELECT kode,negara,champion FROM LIGA";
      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)>0) {
        while ($row=mysqli_fetch_assoc($result)) {
          echo "kode: ".$row["kode"]."-negara: ".$row["negara"."".$row["champion"]."<br>"];

        }
      } else {
        echo "0 result";
      }
      mysqli_close($conn);
     ?>

  </body>
</html>
