<!DOCTYPE html>
<html>
<head>
	<title>DATA PEGAWAI</title>
</head>
<body>

	<h2> DATA PEGAWAI</h2>
	<br/>
	<a href="tambah.php">+ TAMBAH PEGAWAI</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>ID_BT</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>ISI</th>
      <th>OPSI</th>
		</tr>
		<?php
		include 'koneksi2.php';
		$no = 1;
    $sql = "SELECT ID_BT,NAMA,EMAIL,ISI from pegawai";
		$data = mysqli_query($connect,$sql);
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['ID_BT']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['EMAIL']; ?></td>
        <td><?php echo $d['ISI']; ?></td>
				<td>
					<a href="update.php?no=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus.php?no=<?php echo $d['no']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
