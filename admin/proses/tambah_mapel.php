<?php
include '../../koneksi.php';

$nama_mapel    = $_POST['nama_mapel'];

$query= mysqli_query($con,"INSERT INTO mapel (nama_mapel) 
values ('$nama_mapel')") or die(mysqli_error());

if($query){
	echo "<script>alert('Mata Pelajaran Berhasil ditambahkan');</script>";
			echo "<script>location='../data_mapel.php';</script>";
}else{
	echo "<script>alert('Mata Pelajaran Gagal Ditambahkan');</script>";
			echo "<script>location='../data_mapel.php';</script>";
}
?>