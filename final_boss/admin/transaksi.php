<?php
    include '../koneksi.php';
    $data = mysqli_query($koneksi,"select * from tb_transaksi");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ADMIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="https://kit.fontawesome.com/9a065f2d64.js" crossorigin="anonymous"></script>
    <style>
        body {
            margin-top: 10px;
            background-color: white;
        }
    </style>
</head>

<body>

            <div class="container-fluid">

                <!-- Page Heading -->
                <a class="btn btn-primary btn-lg" href="index.php" role="button"><i class="fas fa-long-arrow-alt-left"></i> Kembali</a>
                <div class="row">
                    <center>
                    <div class="col-lg-12">
                        <h1 class="page-header text-white" style="color:black;";>
                            TRANSAKSI 
                        </h1>
                    </div>
                    </center>
                </div>
                <div class="">
                <table class="table table-striped col-lg-12">
                    <thead>
                        <tr>
                        <th scope="col-md-1">No</th>
                        <th scope="col-md-1">Mobil</th>
                        <th scope="col-md-2">Nama</th>
                        <th scope="col-md-2">Alamat</th>
                        <th scope="col-md-2">No Telp</th>
                        <th scope="col-md-1">NIK</th>
                        <th scope="col-md-2">Jaminan</th>
                        <th scope="col-md-2">Tujuan</th>
                        <th scope="col-md-1">Sewa</th>
                        <th scope="col-md-2">Sopir</th>
                        <th scope="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($data as $row):
                        ?>
                        <tr>
                            <th scope="row"><?php echo $no; ?></th>
                            <td class="col-md-1"><?php echo $row['mobil']; ?></td>
                            <td class="col-md-2"><?php echo $row['nama']; ?></td>
                            <td class="col-md-2"><?php echo $row['alamat']; ?></td>
                            <td class="col-md-2"><?php echo $row['no_tlp']; ?></td>
                            <td class="col-md-1"><?php echo $row['nik']; ?></td>
                            <td class="col-md-2"><?php echo $row['jaminan']; ?></td>
                            <td class="col-md-2"><?php echo $row['tujuan']; ?></td>
                            <td class="col-md-1"><?php echo $row['sewa']; ?></td>
                            <td class="col-md-2"><?php echo $row['sopir']; ?></td>
                            <td>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id'];?>&id_sopir=<?php echo $row['sopir'];?>&mobil=<?php echo $row['mobil'];?>" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                        <?php endforeach?>
                    </tbody>
                </table>
                </div>

                <!-- /.row -->

                

</body>

</html>
