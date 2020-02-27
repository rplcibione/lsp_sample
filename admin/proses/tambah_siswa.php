<?php
include '../../koneksi.php';

$nis    = $_POST['nis'];
$nama_siswa          	= $_POST['nama_siswa'];
$jk 			= $_POST['jk'];
$alamat      		= $_POST['alamat'];
$id_kelas			= $_POST['id_kelas'];
$password			= $_POST['password'];

$query= mysqli_query($con,"INSERT INTO siswa (nis,nama_siswa,jk,alamat,id_kelas,password) 
values ('$nis','$nama_siswa','$jk','$alamat','$id_kelas','$password')") or die(mysqli_error());

if($query){
	echo "<script>alert('Siswa Berhasil ditambahkan');</script>";
			echo "<script>location='../data_siswa.php';</script>";
}else{
	echo "<script>alert('Siswa Gagal Ditambahkan');</script>";
			echo "<script>location='../data_siswa.php';</script>";
}
?>