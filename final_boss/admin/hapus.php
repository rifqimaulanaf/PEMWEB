<?php
include '../koneksi.php';
$id = $_GET['id'];
$mobil = $_GET['mobil'];
var_dump($mobil);
$id_sopir = $_GET['id_sopir'];
mysqli_query($koneksi,"update tb_sopir set status = 'tersedia' where id_sopir=$id_sopir");
mysqli_query($koneksi,"update tb_mobil set status = 'tersedia' where id_mobil=$mobil");
mysqli_query($koneksi,"delete from tb_transaksi where id = $id;");
header('Location: transaksi.php');
?>