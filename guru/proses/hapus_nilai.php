<?php
include '../../koneksi.php';

$id_nilai = $_GET['id_nilai'];
$query = mysqli_query($con,"delete from nilai where id_nilai='$id_nilai'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Nilai Berhasil Dihapus');</script>";
			echo "<script>location='../data_nilai.php';</script>";
	}
?>
