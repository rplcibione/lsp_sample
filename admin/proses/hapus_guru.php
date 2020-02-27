<?php
include '../../koneksi.php';

$nip = $_GET['nip'];
$query = mysqli_query($con,"delete from guru where nip='$nip'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Guru Berhasil Dihapus');</script>";
			echo "<script>location='../data_guru.php';</script>";
	}
?>
