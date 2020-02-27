<?php
include '../../koneksi.php';

$nip    = $_POST['nip'];
$nama_guru    = $_POST['nama_guru'];
$jk 			= $_POST['jk'];
$alamat       		= $_POST['alamat'];
$password 			= $_POST['password'];

$query= mysqli_query($con,"UPDATE guru set nama_guru= '$nama_guru', jk = '$jk', alamat = '$alamat', password = '$password' where nip='$nip'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Guru Berhasil diperbaharui');</script>";
			echo "<script>location='../data_guru.php';</script>";
}
?>