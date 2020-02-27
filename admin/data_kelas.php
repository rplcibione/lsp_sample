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
	<a href="data_siswa.php" >Data Siswa</a>
	<a href="data_guru.php">Data Guru</a>
	<a href="data_kelas.php" class="active">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Kelas</u></h1>
	<a href="tambah_kelas.php"><input type="submit" value="Tambah Data"></a><p>
	<table border="1">
	<tr>
		<td align="center"  width="10%">No</td>
		<td align="center" width="10%">ID Kelas</td>
		<td align="center"  width="30%">Nama Kelas</td>
		<td align="center"  width="20%">Nama Jurusan</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	$no=1;
	include "../koneksi.php";
	$query = "SELECT a.nama_kelas,a.id_kelas,b.nama_jurusan FROM kelas a LEFT JOIN jurusan b on a.id_jurusan = b.id_jurusan";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$id_kelas = $data['id_kelas'];
		$nama_kelas = $data['nama_kelas'];
		$nama_jurusan = $data['nama_jurusan'];
	?>

	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo $id_kelas; ?></td>
		<td align="center"><?php echo $nama_kelas; ?></td>
		<td align="center"><?php echo $nama_jurusan; ?></td>
		<td align="center"><a href="edit_kelas.php?id_kelas=<?php echo $id_kelas ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_kelas.php?id_kelas=<?php echo $id_kelas ?>">HAPUS</a></td>
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
