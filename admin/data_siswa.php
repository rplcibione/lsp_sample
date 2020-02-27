<?php
include("../koneksi.php");
session_start();
if(!isset($_SESSION['kode_admin']))
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
	<a href="data_mengajar.php">Data Mengajar</a>
	<a href="data_siswa.php" class="active">Data Siswa</a>
	<a href="data_guru.php">Data Guru</a>
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Siswa</u></h1>
	</center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tambah_siswa.php"><input type="submit" value="Tambah Data"></a><p>
	<center>
	<table border="1">
	<tr>
		<td align="center"  width="20%">NIS</td>
		<td align="center" width="30%">Nama Siswa</td>
		<td align="center"  width="5%">Jenis Kelamin</td>
		<td align="center">Alamat</td>
		<td align="center">Kelas</td>
		<td align="center">Password</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	include "../koneksi.php";
	$query = "SELECT a.nis,a.nama_siswa,a.jk,a.alamat,b.nama_kelas,a.password FROM siswa a LEFT JOIN kelas b on a.id_kelas = b.id_kelas";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$nis = $data['nis'];
		$nama_siswa = $data['nama_siswa'];
		$jk = $data['jk'];
		$alamat = $data['alamat'];
		$nama_kelas = $data['nama_kelas'];
		$password = $data['password'];
	?>

	<tr>
		<td align="center"><?php echo $nis; ?></td>
		<td align="center"><?php echo $nama_siswa; ?></td>
		<td align="center"><?php echo $jk; ?></td>
		<td align="center"><?php echo $alamat; ?></td>
		<td align="center"><?php echo $nama_kelas; ?></td>
		<td align="center"><?php echo $password; ?></td>
		<td align="center"><a href="edit_siswa.php?nis=<?php echo $nis ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_siswa.php?nis=<?php echo $nis ?>">HAPUS</a></td>
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
