<?php
include '../../koneksi.php';

$nis = $_GET['nis'];
$query = mysqli_query($con,"delete from siswa where nis='$nis'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Siswa Berhasil Dihapus');</script>";
			echo "<script>location='../data_siswa.php';</script>";
	}
?>
