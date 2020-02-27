<?php
session_start();
include "koneksi.php";
$nip = $_POST['nip'];
$password = $_POST['password'];
$ambil = mysqli_query($con,"SELECT * FROM guru WHERE nip='$nip' AND password='$password'") or die(mysqli_error());
		$tes = mysqli_num_rows($ambil);
		if($tes > 0)
		{
      $masuk = mysqli_fetch_array($ambil);
      $_SESSION['nip']  = $masuk['nip'];
			echo "<script>alert('Login Success');</script>";
			echo "<script>location='guru/index.php';</script>";
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
			echo "<script>location='index.php';</script>";
		}

?>