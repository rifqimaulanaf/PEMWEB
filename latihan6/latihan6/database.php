<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb2";

$connect=mysqli_connect($servername,$username,$password,$dbname);
if (!$connect) {
  die ("Connection error: ".mysqli_connect_error());
}

$sql="INSERT INTO liga (kode,negara,champion) VALUES('Jer','Jerman','4')";
$sql="INSERT INTO liga (kode,negara,champion) VALUES('Spa','Spanyol','3')";

$sql="INSERT INTO liga (kode,negara,champion) VALUES('Eng','England','3')";
$sql="INSERT INTO liga (kode,negara,champion) VALUES('Jep','Jepang','2')";
if (mysqli_query($connect,$sql)) {
  echo "new record created!!";
}else {
  echo "ERROR: ".$sql."<br>".mysqli_error($connect);
}
mysqli_close($connect);
 ?>
