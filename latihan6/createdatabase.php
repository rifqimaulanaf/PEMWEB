<?php
  $servername="localhost";
  $username="root";
  $password="";
  $conn=mysqli_connect($servername,$username,$password);//mengidentifikasikan database
  if (!$conn) {
    die("connection failed: ".mysqli_connect_error());//jika koneksi gagal maka akan tampil Failed

  }

  $sql="CREATE DATABASE MYDB5";//membuat database MYDB5
  if (mysqli_query($conn,$sql)) {
    echo "DATABASE CREATED";//jika database berhasil dibuat
  }else {
    echo "DATABASE DECLINE".mysqli_error($conn); //jika database gagal dibuat
  }
  mysqli_close($conn)//menutup koneksi 
  ?>
