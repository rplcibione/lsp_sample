<?php
include '../../koneksi.php';

$id_mapel = $_GET['id_mapel'];
$query = mysqli_query($con,"delete from mapel where id_mapel='$id_mapel'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Mata Pelajaran Berhasil Dihapus');</script>";
			echo "<script>location='../data_mapel.php';</script>";
	}
?>
