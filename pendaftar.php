<?php
require ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title> Data Pendaftar</title>
</head>
<body>
	<h2>Data Pendaftar</h2>
	<h2 align="center"></h2>
	<a href="daftarbaru.php"> + Tambah Data</a>

</br>

	<table border="1">
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jenis Kelamin</td>
			<td>Agama</td>
			<td>Sekolah Asal</td>
			<td>Aksi</td>
		</tr>
		<?php
		$no = 1;
		$query = mysqli_query($koneksi, "SELECT * FROM data_siswa, agama where data_siswa.agama = agama.id_agama");
		$quer = mysqli_num_rows($query);
		while ($data = mysqli_fetch_array($query)) { 
			$jenis_kelamin= $data['jenis_kelamin']=='1'?'perempuan' : 'Laki-laki';
		?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $data['nama'];?></td>
				<td><?php echo $data['alamat'];?></td>
				<td><?php echo $jenis_kelamin;?></td>
				<td><?php echo $data['nama_agama'];?></td>
				<td><?php echo $data['sekolah_asal'];?></td>
				<td><a href="updatesiswa.php?id_siswa=<?php echo $data['id_siswa'];?>">Edit</a>
				 | 
				 <a href="deletesiswa.php?id_siswa=<?php echo $data['id_siswa'];?>" Onclick="return confirm('yakin ?')">Hapus</a></td>
			</tr>
		
		<?php } ?>

	</table>
		<tr>
				<td>
					jumlah data  <?php echo $quer ;?>
				</td>
			</tr>
	<p><a href="index.php">kembali</a></p>
	<!-- <p><a href="tambah.php">Tambah Data </a> </p>
	<p><a href="warna.php">Tambah Warna </a> </p> -->
</body>
</html>