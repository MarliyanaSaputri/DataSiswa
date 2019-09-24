<?php
include "koneksi.php";
$nama =$_POST['nama'];
$alamat =$_POST['alamat'];
$jenis_kelamin =$_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$sekolah_asal = $_POST['sekolah_asal'];

$query ="insert into data_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) values ('$nama','$alamat','$jenis_kelamin','$agama','$sekolah_asal')";
$result = mysqli_query($koneksi,$query);
echo "Berhasil tambah<br>";
?><a href="index.php">Kembali</a>
