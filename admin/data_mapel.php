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
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php" class="active">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Mata Pelajaran</u></h1>
	<a href="tambah_mapel.php"><input type="submit" value="Tambah Data"></a><p>

	<table border="1">
	<tr>
		<td align="center"  width="10%">No</td>
		<td align="center" width="10%">ID Mapel</td>
		<td align="center"  width="30%">Nama Mapel</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	$no=1;
	include "../koneksi.php";
	$query = "SELECT * FROM mapel";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$id_mapel = $data['id_mapel'];
		$nama_mapel = $data['nama_mapel'];
	?>

	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo $id_mapel; ?></td>
		<td align="center"><?php echo $nama_mapel; ?></td>
		<td align="center"><a href="edit_mapel.php?id_mapel=<?php echo $id_mapel ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_mapel.php?id_mapel=<?php echo $id_mapel ?>">HAPUS</a></td>
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
