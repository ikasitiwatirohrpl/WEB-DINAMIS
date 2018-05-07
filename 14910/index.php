<!DOCTYPE html>
<html>
<head>
	<title>WEB DINAMIS</title>
</head>
<body>
	<br/>
	<h3>SELAMAT DATANG</h3>
	<h4>SILAHKAN PESAN MAKANAN & MINUMAN SESUAI YANG ANDA INGINKAN</h4>
	<a href="tambah.php">+ TAMBAH PESANAN</a>
	<br>
	<table border="1">
		<tr>
			<th>NO</th>
			<th>MAKANAN</th>
			<th>MINUMAN</th>
			<th>JUMLAH</th>
			<th>OPSI</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from mahasiswa");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
			<center>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['nis']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
				</td>
			</center>
			</tr>
		
			<?php 
		}
		?>
	</table>
</body>
</html>