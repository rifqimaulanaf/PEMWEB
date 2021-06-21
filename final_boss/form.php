<?php
    include 'koneksi.php';
    session_start();
    $data_sopir= mysqli_query($koneksi, "select * from tb_sopir where status='tersedia' order by id_sopir ASC");
    $data_mobil= mysqli_query($koneksi, "select * from tb_mobil where status='tersedia' order by id_mobil ASC");

    if (isset($_POST['konfirm'])) {
        $idmobil=$_POST['mobil'];
        $nama=$_POST['nama_penyewa'];
        $alamat=$_POST['alamat'];
        $no_tlp=$_POST['notlp'];
        $nik=$_POST['nik'];
        $jaminan=$_POST['jaminan'];
        $tujuan=$_POST['tujuan'];
        $sewa=$_POST['sewa'];
        $sopir=$_POST['sopir'];
        if($idmobil == 'kosong'){
            echo "<script type='text/javascript'>alert('Maaf, mobil tidak tersedia');</script>";
        }
        else{
                $mobil=mysqli_query($koneksi,"select * from tb_mobil where id_mobil=$idmobil");
                $mobil=mysqli_fetch_assoc($mobil);
                $mobil=$mobil['merk'];
            if($_POST['sopir']=='tidak'){
                mysqli_query($koneksi, "insert into tb_transaksi values('','$idmobil','$nama','$alamat','$no_tlp',
                '$nik','$jaminan','$tujuan','$sewa','$sopir')");
                mysqli_query($koneksi, "insert into tb_history values('','$idmobil','$nama','$alamat','$no_tlp',
                '$nik','$jaminan','$tujuan','$sewa','$sopir')");
                mysqli_query($koneksi, "update tb_mobil set status='kosong' where id_mobil=$idmobil");

            }
            else{
                $idsopir=$_POST['sopir'];
                $sopir1=mysqli_query($koneksi,"select * from tb_sopir where id_sopir=$idsopir");
                $sopir1=mysqli_fetch_assoc($sopir1);
                $sopir1=$sopir1['nama'];
                // $booking=mysqli_query($koneksi, "select * from tb_sopir where id_sopir=$idsopir");
                // $booking=mysqli_fetch_assoc
                mysqli_query($koneksi, "update tb_sopir set status='tidak tersedia' where id_sopir=$idsopir");
                mysqli_query($koneksi, "update tb_mobil set status='kosong' where id_mobil=$idmobil");
                mysqli_query($koneksi, "insert into tb_transaksi values('','$idmobil','$nama','$alamat','$no_tlp',
                '$nik','$jaminan','$tujuan','$sewa','$sopir')");
                mysqli_query($koneksi, "insert into tb_history values('','$idmobil','$nama','$alamat','$no_tlp',
                '$nik','$jaminan','$tujuan','$sewa','$sopir')");

            }
        }
        $_SESSION['nama'] = $nama;
        $_SESSION['alamat'] = $alamat;
        $_SESSION['notlp'] = $no_tlp;
        $_SESSION['nik'] = $nik;
        $_SESSION['jaminan'] = $jaminan;
        $_SESSION['tujuan'] = $tujuan;
        $_SESSION['sewa'] = $sewa;
        $_SESSION['mobil'] = $mobil;
        $_SESSION['idmobil'] = $idmobil;
        if($_POST['sopir']=='tidak'){
            $sopir = $_POST['sopir'];
        }
        else{
            $sopir=$sopir1;
        }
        $_SESSION['sopir'] = $sopir;
        $_SESSION['mobil'] = $mobil;
        header("Location: bukti.php");
        // $query1= "insert into tb_transaksi values ('', '$mobil', '$nama', '$alamat', '$no_tlp', '$noktp',
        // '$jaminan', '$tujuan', '$sewa', '$ket_sopir', '$sopir', '')";

        // rek nek awakmu wes ngantuk ngomongo sorry gk iso ngomong, aku gk oleh rame2 diseneni


    // mysqli_query($koneksi, $query1);
    }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Rental Mobil Wumbo</title>
  </head>
  <body>
    <div class="container">
        <h2 class="alert alert-primary text-center mt-2">Formulir Penyewaan</h2>
        <form method="post" action="">
        <div class="form-group">
                <label>Pilih Mobil</label>

                <select class="form-control col-3" name="mobil">
                    <?php foreach($data_mobil as $row):?>

                    <option value="<?php echo $row['id_mobil'];?>"><?php echo $row['merk'];?></option>
                    <?php endforeach?>
                    <option value="kosong">Mobil tidak tersedia</option>
                </select>

        </div>
            <!-- <div class="form-group">
                <label>Pilih Mobil</label>
                <select class="form-control col-3" name="mobil">
                    <option value="agya">1. AGYA</option>
                    <option value="ayla">2. AYLA</option>
                    <option value="gmax">3. GRAND MAX</option>
                    <option value="luxio">4. LUXIO</option>
                    <option value="brio">5. BRIO</option>
                    <option value="glivina">6. GLIVINA</option>
                    <option value="newavanza">7. NEW AVANZA</option>
                    <option value="newxenia">8. NEW XENIA</option>
                    <option value="terios">9. TERIOS</option>
                    <option value="mobilio">10. MOBILIO</option>
                </select>
            </div> -->
            <br>
            <div class="row">
                <div class="col-md-10">
                    <div class="form-group">
                        <label>Masukkan Nama</label>
                        <input type="text" name="nama_penyewa" class="form-control" >
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label>Masukkan Alamat</label>
                <textarea class="form-control" name="alamat"></textarea>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Masukkan No.Telepon</label>
                        <input type="number" name="notlp" class="form-control">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Masukkan NIK</label>
                        <small>Pemeriksaan KTP akan dilakukan saat pengambilan mobil</small>
                        <input type="number" name="nik" class="form-control">
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label>Jaminan Motor</label>
                    <small>masukkan nomer plat</small>
                    <input type="text" name="jaminan" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label>Tujuan Perjalanan</label>
                <input type="text" name="tujuan" class="form-control">
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Berapa hari menyewa</label>
                        <input type="text" name="sewa" class="form-control">
                    </div>
                </div>
            </div>
            <br>
            <div class="form-group">
                <label>Pilih Sopir</label>

                <select class="form-control col-3" name="sopir">
                    <?php foreach($data_sopir as $row):?>

                    <option value="<?php echo $row['id_sopir'];?>"><?php echo $row['nama'];?></option>
                    <?php endforeach?>
                    <option value="tidak">Nyupir Dewe</option>
                </select>

            </div><br>

            <br>
            <button type="submit" class="btn btn-primary" name="konfirm">Konfirmasi</button>
            <button type="reset" class="btn btn-danger">Reset</button>
            <!-- <a href="index.html"><button type="submit" class="btn btn-danger">Batal</button></a> -->
            <a href="list_mobil.php"><button class="btn btn-danger">Batal</button></a>


        </form>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
