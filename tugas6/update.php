<?php
include 'koneksi1.php';
$update=mysqli_query($connect,"SELECT * from pegawai where ID_BT='".$_GET['ID_BT']."'");
$d=mysqli_fetch_array($update);

 ?>
<html>
<head>
	<title>EDIT DATA</title>
</head>
<body>

	<h1>EDIT DATA PEGAWAI</h1>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h2>EDIT DATA PEGAWAI</h2>
	<form method="post" >
		<table>
			<tr>
				<td>ID_BT</td>
				<td><input type="number" name="ID_BT" value="<?php  echo $d['ID_BT'] ?>"></td>
			</tr>
			<tr>
				<td>NAMA</td>
				<td><input type="text" name="NAMA" value="<?php  echo $d['NAMA'] ?>"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
				<td><input type="text" name="EMAIL"value="<?php  echo $d['EMAIL'] ?>"></td>
			</tr>
      <tr>
        <td>ISI</td>
        <td><input type="text" name="ISI"value="<?php  echo $d['ISI'] ?>"</td>
      </tr>
			<tr>
				<td></td>
				<td><input type="submit" name="edit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
	<?php
		if (isset($_POST['edit'])) {
			$updatedata=mysqli_query($connect,"UPDATE pegawai set
				ID_BT='".$_POST['ID_BT']."' ,
				NAMA='".$_POST['NAMA']."' ,
				EMAIL='".$_POST['EMAIL']."' ,
				ISI='".$_POST['ISI']."'
				where ID_BT='".$_GET['ID_BT']."'");
        if ($updatedata) {
          echo "SUDAH TEREDIT SILAKAN KLIK KEMBALI";
        }else {
          echo "DECLINE";
        }
		}
	 ?>
</body>

</html>
