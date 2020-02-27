<?php
include '../../koneksi.php';

$id_jurusan 			= $_POST['id_jurusan'];
$nama_jurusan    = $_POST['nama_jurusan'];

$query= mysqli_query($con,"UPDATE jurusan set nama_jurusan= '$nama_jurusan' where id_jurusan='$id_jurusan'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Jurusan Berhasil diperbaharui');</script>";
			echo "<script>location='../data_jurusan.php';</script>";
}
?>