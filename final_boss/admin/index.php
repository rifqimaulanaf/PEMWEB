<?php
include "../koneksi.php";
$mobil = mysqli_query($koneksi,"select * from tb_mobil");
$sopir = mysqli_query($koneksi,"select * from tb_sopir"); 
while($row = mysqli_fetch_array($mobil)){
	$nama_mobil[] = $row['merk'];
	
    $query = mysqli_query($koneksi,"select * from tb_history where mobil ='".$row['id_mobil']."'");
    $query = mysqli_num_rows($query);
	$jumlah[] = $query;
}
while($row = mysqli_fetch_array($sopir)){
	$nama_sopir[] = $row['nama'];
	
    $query = mysqli_query($koneksi,"select * from tb_history where sopir ='".$row['id_sopir']."'");
    $query = mysqli_num_rows($query);
	$jumlah1[] = $query;
}
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
    <script type="text/javascript" src="Chart.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
        <script src="https://kit.fontawesome.com/9a065f2d64.js" crossorigin="anonymous"></script>
        <style>
            body{
                background-color:white;
            }
        </style>
</head>

<body>

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 style="color:black; font-size:50px;";>
                            ADMIN 
                        </h1>
                        <br>
                    </div>
                </div>

                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fas fa-user-check fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">26</div>
                                        <div>Sopir Tersedia</div>
                                    </div>
                                </div>
                            </div>
                        
                                <div class="panel-footer">
                                    <span class="pull-left" style="color: #f5f5f5;">w</span>
                                    <div class="clearfix"></div>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-car fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">12</div>
                                        <div>Mobil Tesedia</div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-footer">
                                    <span class="pull-left" style="color: #f5f5f5;">w</span>
                                    <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-shopping-cart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">124</div>
                                        <div>Transaksi Berjalan</div>
                                    </div>
                                </div>
                            </div>
                            <a href="transaksi.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                    <i class="fas fa-history fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">13</div>
                                        <div>History</div>
                                    </div>
                                </div>
                            </div>
                            <a href="history.php">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="d-flex justify-content-center">
                    <div  class="canvas-holder" style="width:100rem; height: 20rem;">
                        <canvas id="myChart" style="height: 16rem; width: 100rem;"></canvas>
                    </div>
                    <div class="canvas-holder" style="width:30rem; height: 20rem;">
                        <canvas id="myChart1" style="height: 16rem; width: 30rem;"></canvas>
                    </div>
                </div>
                <script>
                    var ctx = document.getElementById("myChart").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($nama_mobil); ?>,
                            datasets: [{
                                label: 'Grafik Mobil',
                                data: <?php echo json_encode($jumlah); ?>,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255,99,132,1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });

                    var ctx = document.getElementById("myChart1").getContext('2d');
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: <?php echo json_encode($nama_sopir); ?>,
                            datasets: [{
                                label: 'Grafik Mobil',
                                data: <?php echo json_encode($jumlah1); ?>,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255,99,132,1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                yAxes: [{
                                    ticks: {
                                        beginAtZero:true
                                    }
                                }]
                            }
                        }
                    });
                </script>
    
    
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
