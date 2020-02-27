<?php
include '../../koneksi.php';

$id_jurusan = $_GET['id_jurusan'];
$query = mysqli_query($con,"delete from jurusan where id_jurusan='$id_jurusan'") or die(mysqli_error());

if ($query) {
	echo "<script>alert('Jurusan Berhasil Dihapus');</script>";
			echo "<script>location='../data_jurusan.php';</script>";
	}
?>
