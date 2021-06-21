<?php
    include "koneksi.php";
    session_start();
    $idmobil = $_SESSION['idmobil'];
    $hargamobil = mysqli_query($koneksi,"select * from tb_mobil where id_mobil = $idmobil");
    $hargamobil = mysqli_fetch_assoc($hargamobil);
    $hargamobil = $hargamobil['harga_harian'];
    if($_SESSION['sopir']=='tidak'){
        $sopir = 0;
    }
    else{
        $sopir=150000;
    }
    $sewa=$_SESSION['sewa'];
    $harga = ($hargamobil+$sopir)*$sewa;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9a065f2d64.js" crossorigin="anonymous"></script>
    <style>
        .container{
            width: 40%;
            margin-top: 3%;
            box-shadow: 0 3px 25px rgba(0,0,0,0.4);
            padding: 40px;
        }
        .container ul li{
            text-decoration: none;
        }
    </style>
    <title></title>
  </head>
  <body>
  <?php
    include 'koneksi.php';
    ?>

    <div class="container">
        <h2 class="text-center">BUKTI SEWA</h2>
        <hr>
        <ul class="list-group">
            <li class="list-group-item">Nama Penyewa : <?php echo $_SESSION['nama']; ?></li>
            <li class="list-group-item">Alamat : <?php echo $_SESSION['alamat']; ?></li>
            <li class="list-group-item">Nomor Telpon : <?php echo $_SESSION['notlp']; ?></li>
            <li class="list-group-item">NIK : <?php echo $_SESSION['nik']; ?></li>
            <li class="list-group-item">Tujuan : <?php echo $_SESSION['tujuan']; ?></li>
            <li class="list-group-item">Sewa : <?php echo $_SESSION['sewa']; ?> Hari</li>
            <li class="list-group-item">Jaminan : <?php echo $_SESSION['jaminan']; ?></li>
            <li class="list-group-item">Sopir : <?php echo $_SESSION['sopir']; ?></li>
            <li class="list-group-item">Mobil : <?php echo $_SESSION['mobil']; ?></li>
            <li class="list-group-item">Harga : <?php echo $harga;?></li>
        </ul>

    </div>
    <div class="d-flex justify-content-center mt-2">

    </div>
    <script>
      window.print();
    </script>
  </body>
</html>
