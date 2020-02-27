<?php
include '../../koneksi.php';

$id_mapel 			= $_POST['id_mapel'];
$nama_mapel    = $_POST['nama_mapel'];

$query= mysqli_query($con,"UPDATE mapel set nama_mapel= '$nama_mapel' where id_mapel='$id_mapel'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Mata Pelajaran Berhasil diperbaharui');</script>";
			echo "<script>location='../data_mapel.php';</script>";
}
?>