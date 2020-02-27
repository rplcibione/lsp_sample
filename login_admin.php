<?php
session_start();
include "koneksi.php";
$kode_admin = $_POST['kode_admin'];
$password = $_POST['password'];
$ambil = mysqli_query($con,"SELECT * FROM administrator WHERE kode_admin='$kode_admin' AND password='$password'") or die(mysqli_error());
		$tes = mysqli_num_rows($ambil);
		if($tes > 0)
		{
      $masuk = mysqli_fetch_array($ambil);
      $_SESSION['kode_admin']  = $masuk['kode_admin'];
			echo "<script>alert('Login Success');</script>";
			echo "<script>location='admin/index.php';</script>";
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
			echo "<script>location='index.php';</script>";
		}

?>