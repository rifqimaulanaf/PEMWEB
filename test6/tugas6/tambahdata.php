<?php
// koneksi database
include 'koneksi2.php';

// menangkap data yang di kirim dari form

$ID_BT = $_POST['ID_BT'];
$NAMA = $_POST['NAMA'];
$EMAIL = $_POST['EMAIL'];
$ISI = $_POST['ISI'];

// menginput data ke database
$tambahdata="INSERT into pegawai values('','$ID_BT','$NAMA','$EMAIL','$ISI')";
mysqli_query($connect,$tambahdata);

// mengalihkan halaman kembali ke index.php
header("location:index.php");

?>
