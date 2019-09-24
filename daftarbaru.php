<?php
require ("koneksi.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar baru</title>
</head>
<body>
	<h2>Formulir Pendaftaran Siswa</h2>
	<form border="1" method="POST" action="prosesdaftar.php">
		<table >
		<tr>
			<td>Nama</td>
			<td><input type="text" name="nama" placeholder="Nama lengkap"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<textarea name="alamat"></textarea>
			</td>

		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td><input type="radio" name="jenis_kelamin" value="P">Pereumpuan</td>
			<td><input type="radio" name="jenis_kelamin" value="L">Laki Laki</td>
		</tr>
		<tr>
			<td>Agama</td>
			<td><select name="agama">
				<?php
						$query = mysqli_query($koneksi, "SELECT * FROM agama");
						while ($data = mysqli_fetch_array($query)) { ?>
					<option value="<?php echo $data['id_agama'];?>"><?php echo $data['nama_agama'];?> </option>
					<?php }?>
				</option>
			</select></td>		
		</tr>
		<tr>
			<td>Sekolah Asal</td>
			<td><input type="text" name="sekolah_asal" placeholder="Sekolah Asal"></td>
		</tr>
		<tr>
			<td><input type="Submit" name="Submit" value="Submit">
			</td>
		</tr>
	</table>
	</form>

</body>
</html>