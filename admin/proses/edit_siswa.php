<?php
include '../../koneksi.php';

$nis    = $_POST['nis'];
$nama_siswa    = $_POST['nama_siswa'];
$jk 			= $_POST['jk'];
$alamat       		= $_POST['alamat'];
$id_kelas 			= $_POST['id_kelas'];
$password 			= $_POST['password'];

$query= mysqli_query($con,"UPDATE siswa set nama_siswa= '$nama_siswa', jk = '$jk', alamat = '$alamat',id_kelas = '$id_kelas', password = '$password' where nis='$nis'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Siswa Berhasil diperbaharui');</script>";
			echo "<script>location='../data_siswa.php';</script>";
}
?>