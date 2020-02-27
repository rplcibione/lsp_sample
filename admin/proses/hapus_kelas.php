<?php
include '../../koneksi.php';

$id_kelas = $_GET['id_kelas'];
$query = mysqli_query($con,"delete from kelas where id_kelas='$id_kelas'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Kelas Berhasil Dihapus');</script>";
			echo "<script>location='../data_kelas.php';</script>";
	}
?>
