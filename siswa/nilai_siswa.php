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
	<a href="index.php">Home</a>
	<a href="index.php"  class="active">Data Nilai</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Nilai</u></h1>
	<?php
	$nis = $_SESSION['nis'];
	$user = "SELECT * FROM siswa where nis='$nis'";
	$usersql = mysqli_query($con,$user);
	$usersqlrow = mysqli_fetch_array($usersql);
	$nama_siswa = $usersqlrow['nama_siswa'];
	$query = "SELECT * FROM vnilai where nama_siswa = '$nama_siswa'";
	$sql = mysqli_query($con, $query);
	$data=mysqli_fetch_array($sql);
	$nama_siswa = $data['nama_siswa'];
	$nama_kelas = $data['nama_kelas'];
	$nama_jurusan = $data['nama_jurusan'];
	?>
	Nama : <?php echo $nama_siswa; ?><br>
	Kelas : <?php echo $nama_kelas; ?><br>
	Jurusan : <?php echo $nama_jurusan; ?><br><br>

	<table border="1">
	<tr>
		<td align="center" width="30%">Nama Guru</td>
		<td align="center" width="30%">Mata Pelajaran</td>
		<td align="center">Nilai UH</td>
		<td align="center">Nilai UTS</td>
		<td align="center">Nilai UAS</td>
		<td align="center">Nilai Akhir</td>
	</tr>
	<?php
	$nis = $_SESSION['nis'];
	$user = "SELECT * FROM siswa where nis='$nis'";
	$usersql = mysqli_query($con,$user);
	$usersqlrow = mysqli_fetch_array($usersql);
	$nama_siswa = $usersqlrow['nama_siswa'];
	$query = "SELECT * FROM vnilai where nama_siswa = '$nama_siswa'";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$nama_guru = $data['nama_guru'];
		$nama_mapel = $data['nama_mapel'];
		$uh = $data['uh'];
		$uts = $data['uts'];
		$uas = $data['uas'];
		$na = $data['na'];
	?>

	<tr>
		<td align="center"><?php echo $nama_guru; ?></td>
		<td align="center"><?php echo $nama_mapel; ?></td>
		<td align="center"><?php echo $uh; ?></td>
		<td align="center"><?php echo $uts; ?></td>
		<td align="center"><?php echo $uas; ?></td>
		<td align="center"><?php echo $na; ?></td>
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
