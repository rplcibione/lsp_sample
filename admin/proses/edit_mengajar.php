<?php
include '../../koneksi.php';

$id_mengajar    = $_POST['id_mengajar'];
$id_mapel		= $_POST['id_mapel'];
$id_kelas       = $_POST['id_kelas'];

$query= mysqli_query($con,"UPDATE mengajar set id_mapel= '$id_mapel', id_kelas = '$id_kelas' where id_mengajar='$id_mengajar'") or die(mysqli_error());

if ($query) {
echo "<script>alert('Data Mengajar Berhasil diperbaharui');</script>";
			echo "<script>location='../data_mengajar.php';</script>";
}else{
	echo "<script>alert('Data Mengajar Gagal diperbaharui');</script>";
			echo "<script>location='../data_mengajar.php';</script>";

}
?>