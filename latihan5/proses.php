<?php
include"inc.php";
echo $angka;
echo "<br>";
if ($angka==100) {
  echo "Memuaskan";
  }
  elseif ($angka<100&&$angka>=85) {//jika $angka kurang dari 100 dan lebih dari sama dengan 85 maka hasil menampilkan sangat baik
    echo "sangat baik";
  }elseif ($angka<85&&$angka>=70) {//jika $angka kurang dari 85 dan lebih dari sama dengan 70 maka hasil menampilkan  baik
    echo "baik";
  }elseif ($angka<70&&$angka>=55) {//jika $angka kurang dari 70 dan lebih dari sama dengan 55 maka hasil menampilkan cukup
    echo "cukup";
  }elseif ($angka<55&&$angka>=0) {//jika $angka kurang dari 55 dan lebih dari sama dengan 0 maka hasil menampilkan kurang
    echo "kurang";;
  }

 ?>
