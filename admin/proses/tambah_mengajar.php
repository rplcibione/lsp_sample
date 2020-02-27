<?php
include '../../koneksi.php';

$nip    = $_POST['nip'];
$id_mapel          	= $_POST['id_mapel'];
$id_kelas 			= $_POST['id_kelas'];

$query= mysqli_query($con,"INSERT INTO mengajar (nip,id_mapel,id_kelas) 
values ('$nip','$id_mapel','$id_kelas')") or die(mysqli_error());

if ($query) {
echo "<script>alert('Data Mengajar Berhasil disimpan');</script>";
			echo "<script>location='../data_mengajar.php';</script>";
}
?>