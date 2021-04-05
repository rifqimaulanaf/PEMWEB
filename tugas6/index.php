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
	<table border="3">
		<tr>

			<th>ID_BT</th>
			<th>NAMA</th>
			<th>EMAIL</th>
			<th>ISI</th>
      <th>OPSI</th>
		</tr>
		<?php
		include 'koneksi1.php';

		$no = 1;
    $sql = "SELECT * FROM pegawai";
		$data = mysqli_query($connect,$sql);
		if (mysqli_num_rows($data)) {


		while($d = mysqli_fetch_array($data)){
			?>
			<tr>

				<td><?php echo $d['ID_BT']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['EMAIL']; ?></td>
        <td><?php echo $d['ISI']; ?></td>

				<td>

					<a href="update.php?ID_BT=<?php echo $d['ID_BT'];?>">EDIT</a> ||
					<a href="delete.php?ID_BT=<?php echo $d['ID_BT'];?>">HAPUS</a>
				</td>
			</tr>
			<?php
		}}else {		?>
			<tr>
				<td colspan="5" align="center">DATA KOSONG</td>
			</tr>
	<?php
		}
	 ?>
	</table>
</body>
</html>
