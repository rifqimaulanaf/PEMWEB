<?php
//include database configuration file
include '../koneksi.php';

//get records from database
$query = $koneksi->query("SELECT * FROM tb_history ORDER BY id DESC");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "history_" . date('Y-m-d') . ".csv";

    //create a file pointer
    $f = fopen('php://memory', 'w');

    //set column headers
    $fields = array('ID', 'Mobil', 'Nama', 'Alamat', 'No.Telp', 'NIK','jaminan','tujuan','sewa','sopir');
    fputcsv($f, $fields, $delimiter);

    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){

        $lineData = array($row['id'], $row['mobil'], $row['alamat'], $row['no_tlp'], $row['nik'],$row['jaminan'],$row['tujuan'],$row['sewa'],$row['sopir']);
        fputcsv($f, $lineData, $delimiter);
    }

    //move back to beginning of file
    fseek($f, 0);

    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');

    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>
