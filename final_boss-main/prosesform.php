<?php
include 'koneksi.php';
if(!isset($_POST['simpan'])){
echo "<table><center>";
echo '<br><tr><td>'.'Pilih Mobil                  &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['mobil'].'</td></tr></br>';
echo '<br><tr><td>'.'Alamat                       &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['alamat'].'</td></tr></br>';
echo '<br><tr><td>'.'No. Telepon                  &nbsp&nbsp&nbsp  '.'</td><td>'.$_POST['hp'].'</td></tr></br>';
echo '<br><tr><td>'.'NO. KTP                      &nbsp&nbsp&nbsp  '.'</td><td>'.$_POST['noktp'].'</td></tr></br>';
echo '<br><tr><td>'.'Tujuan                       &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['tujuan'].'</td></tr></br>';
echo '<br><tr><td>'.'Tanggal Awal Penyewaan       &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['tgl_awal'].'</td></tr></br>';
echo '<br><tr><td>'.'Tanggal Akhir Penyewaan      &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['tgl_akhir'].'</td></tr></br>';
echo '<br><tr><td>'.'Menggunakan Sopir            &nbsp&nbsp&nbsp   '.'</td><td>'.$_POST['menggunakan'].'</td></tr></br>';
echo "</center></table>";
}
?>
