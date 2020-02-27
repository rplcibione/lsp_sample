<?php
include '../../koneksi.php';

$id_mengajar    = $_POST['id_mengajar'];
$nis          	= $_POST['nis'];
$uh 			= $_POST['uh'];
$uts       		= $_POST['uts'];
$uas 			= $_POST['uas'];
$nilai_akhir 	= ($uh + $uts + $uas) / 3;

$query= mysqli_query($con,"INSERT INTO nilai (id_mengajar,nis,uh,uts,uas,na) 
values ('$id_mengajar','$nis','$uh','$uts','$uas','$nilai_akhir')") or die(mysqli_error());

if ($query) {
echo "<script>alert('Nilai Berhasil disimpan');</script>";
			echo "<script>location='../data_nilai.php';</script>";
}
?>