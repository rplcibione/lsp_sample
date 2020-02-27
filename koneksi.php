<?php
$hostname = "localhost:3307";
$username = "root";
$password = "";
$nama_database = "smkindonesia";

$con = mysqli_connect($hostname,$username,$password,$nama_database);

if (!$con) {
	echo "KONEKSI GAGAL, PERIKSA KONEKSI ANDA";
}
?>