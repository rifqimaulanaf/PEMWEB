<?php
  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password);
  if (!$conn) {
    die("connection failed: ".mysqli_connect_error());

  }
  CREATE TABLE liga (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
kode VARCHAR(3) NOT NULL,
negara VARCHAR(30) NOT NULL,
champion int(3)
);
  $sql="INSERT INTO LIGA (kode,negara,champion) VALUES ('jer','jerman','4')";
  $sql= "CREATE DATABASE mydb4";

  if (mysqli_query($conn,$sql)) {
    echo "database created";
  }
  else {
    echo "ERROR CREATING DATABASE".mysqli_error($conn);
  }
  mysqli_close($conn)


 ?>
