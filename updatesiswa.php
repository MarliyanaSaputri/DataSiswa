<?php
require ("koneksi.php");
$id = $_GET['id_siswa'];
$query = mysqli_query($koneksi, "SELECT * FROM data_siswa where id_siswa=$id");
while ($data = mysqli_fetch_array($query)) { 
$j= $data['jenis_kelamin'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar baru</title>
</head>
<body>
	<h2>Formulir Pendaftaran Siswa</h2>
	<form border="1" method="POST" action="prosesedit.php?id_siswa=<?php echo $data['id_siswa'];?>">
		<table >
		<tr>
			<td>Nama</td>
			<td>
				<input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa'];?>" >
				<input type="text" name="nama" value="<?php echo $data['nama'];?>" placeholder="Nama lengkap"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>
				<textarea type="textarea" name="alamat" ><?php echo $data['alamat'];?> </textarea>
			</td>

		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>
	<?php 
	if($j=='1'){
		echo'	
			<input type="radio" name="jenis_kelamin" value="1" checked>Perempuan
			<input type="radio" name="jenis_kelamin" value="2" >Laki laki';
		}else{'
			<input type="radio" name="jenis_kelamin" value="1">Perempuan
			<input type="radio" name="jenis_kelamin" value="2" checked>Laki laki';
		};?>
		</tr>
	
		<tr>
			<td>Agama</td>
			<td><select name="agama">
			 	<?php
						$query = mysqli_query($koneksi, "SELECT * FROM agama");
						while ($data = mysqli_fetch_array($query)) {
						if($agama==$data['id_agama']){
							$select="selected";
						}else{
							$select="";
						} 
					echo "<option $select value=".$data['id_agama'].">".$data['nama_agama']." </option>";
					 }
					 ?> 
		
			</select></td>		
		</tr>
		<tr>
			<td>Sekolah Asal</td>
			<td><input type="text" name="sekolah_asal" value="<?php echo $data['sekolah_asal'];?>" >
			</td>
		</tr>
		<tr>
			<td><input type="Submit" name="Submit" value="simpan">
			</td>
		</tr>
	</table>

	</form>
<?php }?>
</body>
</html>