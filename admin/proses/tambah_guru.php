<?php
include '../../koneksi.php';

$nip    = $_POST['nip'];
$nama_guru    = $_POST['nama_guru'];
$jk 			= $_POST['jk'];
$alamat       		= $_POST['alamat'];
$password 			= $_POST['password'];

$query= mysqli_query($con,"INSERT INTO guru (nip,nama_guru,jk,alamat,password) 
values ('$nip','$nama_guru','$jk','$alamat','$password')") or die(mysqli_error());

if($query){
	echo "<script>alert('Guru Berhasil ditambahkan');</script>";
			echo "<script>location='../data_guru.php';</script>";
}else{
	echo "<script>alert('Guru Gagal Ditambahkan');</script>";
			echo "<script>location='../data_guru.php';</script>";
}
?>