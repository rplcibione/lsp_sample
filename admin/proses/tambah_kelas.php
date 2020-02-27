<?php
include '../../koneksi.php';

$nama_kelas    = $_POST['nama_kelas'];
$id_jurusan         	= $_POST['id_jurusan'];

$query= mysqli_query($con,"INSERT INTO kelas (nama_kelas,id_jurusan) 
values ('$nama_kelas','$id_jurusan')") or die(mysqli_error());

if($query){
	echo "<script>alert('Kelas Berhasil ditambahkan');</script>";
			echo "<script>location='../data_kelas.php';</script>";
}else{
	echo "<script>alert('Kelas Gagal Ditambahkan');</script>";
			echo "<script>location='../data_kelas.php';</script>";
}
?>