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
	<a href="index.php">Home</a>
	<a href="data_nilai.php">Data Nilai</a>
	<a href="data_mengajar.php">Data Mengajar</a>
	<a href="data_siswa.php" >Data Siswa</a>
	<a href="data_guru.php">Data Guru</a>
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php" class="active">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Kelas</u></h1>

	<table border="1">
	<tr>
		<td align="center"  width="10%">No</td>
		<td align="center" width="10%">ID Jurusan</td>
		<td align="center"  width="30%">Nama Jurusan</td>
	</tr>
	<?php
	$no=1;
	include "../koneksi.php";
	$query = "SELECT * FROM jurusan";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$id_jurusan = $data['id_jurusan'];
		$nama_jurusan = $data['nama_jurusan'];
	?>

	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo $id_jurusan; ?></td>
		<td align="center"><?php echo $nama_jurusan; ?></td>
	</tr>
	<?php
	}
	?>
	</table>
</center>
</div>
<div class="footer">
	<p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>
