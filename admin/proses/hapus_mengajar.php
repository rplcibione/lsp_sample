<?php
include '../../koneksi.php';

$id_mengajar = $_GET['id_mengajar'];
$query = mysqli_query($con,"delete from mengajar where id_mengajar='$id_mengajar'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Data Mengajar Berhasil Dihapus');</script>";
			echo "<script>location='../data_mengajar.php';</script>";
	}
	else {
		echo "<script>alert('Data Mengajar Gagal Dihapus');</script>";
			echo "<script>location='../data_mengajar.php';</script>";
	}
?>
