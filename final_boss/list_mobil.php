<?php
include 'koneksi.php'
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Rental Mobil Wumbo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="nav-name">
        <p>Sistem Informasi Penyewaan Mobil Wumbo team</p></div>
        <nav class="new-item">
            <ul class="new-links">
                <li><a href="index.html" class="nav-link text-white">HOME</a></li>
                <li><a href="list_mobil.php" class="nav-link text-white">List Mobil</a></li>
                <li><a href="peraturan.html" class="nav-link text-white">Peraturan dan Persyaratan</a></li>
                <li><a href="hubungi.html" class="nav-link text-white">Hubungi Kami</a></li>
            </ul>
        </nav>

    </div>
    <div class="container">
    <form method="get" action="produk.php">
    <div class="produk">
    </form>
        <div class="main_box">
            <div class="box1">
                <div class="mobil1">

                </div>
                <div class="agya">
                    AGYA 250.000
                </div>
            </div>
            <div class="box2">
                <div class="mobil2">

                </div>
                <div class="ayla">
                    AYLA 250.000
                </div>
            </div>
            <div class="box3">
                <div class="mobil3">

                </div>
                <div class="grandmax">
                    GRANDMAX 250.000
                </div>
            </div>
            <div class="box4">
                <div class="mobil4">

                </div>
                <div class="luxio">
                    LUXIO 250.000
                </div>
            </div>
            <div class="box5">
                <div class="mobil5">

                </div>
                <div class="brio">
                    BRIO 275.000
                </div>
            </div>
            <div class="box6">
                <div class="mobil6">

                </div>
                <div class="glivina">
                    G LIVINA 275.000
                </div>
            </div>
            <div class="box7">
                <div class="mobil7">

                </div>
                <div class="newavanza">
                    NEW AVANZA 275.000
                </div>
            </div>
            <div class="box8">
                <div class="mobil8">

                </div>
                <div class="newxenia">
                    NEW XENIA 275.000
                </div>
            </div>
            <div class="box9">
                <div class="mobil9">

                </div>
                <div class="terios">
                    TERIOS 275.000
                </div>
            </div>
            <div class="box10">
                <div class="mobil10">

                </div>
                <div class="mobilio">
                    MOBILIO 300.000
                    <br>
                </div>
            </div>
            <div class="sewa">
                <form action="form.php" method="post">
                    <div class=" d-flex justify-content-center  mb-2">
                        <button type="submit" class="btn btn-primary fs-5" name="mulai">MULAI SEWA</button>
                    </div>
                </form>
                <?php
                    if(isset($_POST['mulai'])){
                        $data_mobil=mysqli_query($koneksi,"select * from tb_mobil where status = 'tersedia'");
                        if(mysqli_num_rows($data_mobil)>0){
                            header('Location: form.php');
                        } else{
                            echo "<script type='text/javascript'>alert('Maaf, mobil tidak tersedia');</script>";
                        }
                    }

                ?>
            </div>
        </div>

    </div>


</body>
</html>
