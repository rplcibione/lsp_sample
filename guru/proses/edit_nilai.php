<?php
include '../../koneksi.php';

$id_nilai    = $_POST['id_nilai'];
$uh 			= $_POST['uh'];
$uts       		= $_POST['uts'];
$uas 			= $_POST['uas'];
$nilai_akhir 	= ($uh + $uts + $uas) / 3;

$query= mysqli_query($con,"UPDATE nilai set uh= '$uh', uts = '$uts', uas = '$uas', na = '$nilai_akhir' where id_nilai='$id_nilai' ") or die(mysqli_error());

if ($query) {
echo "<script>alert('Nilai Berhasil diperbaharui');</script>";
			echo "<script>location='../data_nilai.php';</script>";
}
?>