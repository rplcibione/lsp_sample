<?php
include("../koneksi.php");
session_start();
if(!isset($_SESSION['nis']))
{
	echo "<script>alert('Anda Harus Login Terlebih Dahulu');</script>";
	echo "<script>location='index.php';</script>";

}
?>

<html>
<head>
		<title>Penilaian</title>
	 <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
	<img src="../gambar/header.jpg" width="100%" height="40%">
</div>
<div class="menu">
  <b>
	<a href="index.php" class="active">Home</a>
	<a href="nilai_siswa.php">Data Nilai</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<h1>
	<center>SELAMAT DATANG
		<br>	Di Website Penilaian SMK Negeri 1 Cibinong
		<?php
		$nis = $_SESSION['nis'];
	$user = "SELECT * FROM siswa where nis='$nis'";
	$usersql = mysqli_query($con,$user);
	$usersqlrow = mysqli_fetch_array($usersql);
	$nama_siswa = $usersqlrow['nama_siswa'];?>
	<?php echo $nama_siswa;?>
	</center>
</div>
<div class="footer">
	<p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>
