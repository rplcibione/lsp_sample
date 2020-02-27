<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$ambil = mysqli_query($con,"SELECT * FROM admin WHERE username='$username' AND password='$password'") or die(mysqli_error());
		$tes = mysqli_num_rows($ambil);
		if($tes > 1)
		{
      $azz = mysqli_fetch_array($ambil);
      $_SESSION['username']  = $azz['username'];
			echo "<script>alert('Login Success');</script>";
			echo "<script>location='../admin/index.php';</script>";
		}
		else
		{
			echo "<script>alert('Login Failed');</script>";
			echo "<script>location='../index.php';</script>";
		}

?>