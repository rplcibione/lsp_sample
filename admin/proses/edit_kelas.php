<?php
include '../../koneksi.php';

$id_kelas    = $_POST['id_kelas'];
$nama_kelas    = $_POST['nama_kelas'];
$id_jurusan 			= $_POST['id_jurusan'];

$query= mysqli_query($con,"UPDATE kelas set nama_kelas= '$nama_kelas', id_jurusan = '$id_jurusan' where id_kelas='$id_kelas'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Kelas Berhasil diperbaharui');</script>";
			echo "<script>location='../data_kelas.php';</script>";
}
?>