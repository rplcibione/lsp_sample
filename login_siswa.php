<?php
session_start();
include "koneksi.php";
$nis = $_POST['nis'];
$password = $_POST['password'];
$ambil = mysqli_query($con,"SELECT * FROM siswa WHERE nis='$nis' AND password='$password'") or die(mysqli_error());
		$tes = mysqli_num_rows($ambil);
		if($tes > 0)
		{
      $masuk = mysqli_fetch_array($ambil);
      $_SESSION['nis']  = $masuk['nis'];
			echo "<script>alert('Login Success');</script>";
			echo "<script>location='siswa/index.php';</script>";
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
			echo "<script>location='index.php';</script>";
		}

?>