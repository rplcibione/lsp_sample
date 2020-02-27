<?php
include '../../koneksi.php';

$nama_jurusan    = $_POST['nama_jurusan'];

$query= mysqli_query($con,"INSERT INTO jurusan (nama_jurusan) 
values ('$nama_jurusan')") or die(mysqli_error());

if($query){
	echo "<script>alert('Jurusan Berhasil ditambahkan');</script>";
			echo "<script>location='../data_jurusan.php';</script>";
}else{
	echo "<script>alert('Jurusan Gagal Ditambahkan');</script>";
			echo "<script>location='../data_jurusan.php';</script>";
}
?>