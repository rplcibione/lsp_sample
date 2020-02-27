<?php
include("../koneksi.php");
session_start();
if(!isset($_SESSION['nip']))
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
	<a href="index.php" class="active"	>Home</a>
	<a href="data_nilai.php">Data Nilai</a>
	<a href="data_mengajar.php">Data Mengajar</a>
	<a href="data_siswa.php">Data Siswa</a>
	<a href="data_guru.php">Data Guru</a>
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<h1>
	<center>SELAMAT DATANG
		<br>	Di Website Penilaian SMK Negeri 1 Cibinong
		<?php
		$nip = $_SESSION['nip'];
	$user = "SELECT * FROM guru where nip='$nip'";
	$usersql = mysqli_query($con,$user);
	$usersqlrow = mysqli_fetch_array($usersql);
	$nama_guru = $usersqlrow['nama_guru'];?>
	<?php echo $nama_guru;?>
	</center>
</div>
<div class="footer">
	<p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>
