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
	<a href="data_mengajar.php" class="active">Data Mengajar</a>
	<a href="data_siswa.php" >Data Siswa</a>
	<a href="data_guru.php">Data Guru</a>
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Mengajar</u></h1>
	</center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tambah_mengajar.php"><input type="submit" value="Tambah Data"></a><p>
	<center>
	<table border="1">
	<tr>
		<td align="center"  width="20%">NIP</td>
		<td align="center" width="30%">Nama Guru</td>
		<td align="center"  width="30%">Kelas</td>
		<td align="center">Mata Pelajaran</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	include "../koneksi.php";
	$query = "SELECT a.id_mengajar,b.nama_guru,b.nip,d.nama_kelas,c.nama_mapel FROM mengajar a LEFT JOIN guru b on a.nip = b.nip LEFT JOIN  mapel c on a.id_mapel = c.id_mapel LEFT JOIN  kelas d on a.id_kelas = d.id_kelas";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$nama_guru = $data['nama_guru'];
		$nip = $data['nip'];
		$kelas = $data['nama_kelas'];
		$mapel = $data['nama_mapel'];
		$id_mengajar = $data['id_mengajar'];
	?>

	<tr>
		<td align="center"><?php echo $nip; ?></td>
		<td align="center"><?php echo $nama_guru; ?></td>
		<td align="center"><?php echo $mapel; ?></td>
		<td align="center"><?php echo $kelas; ?></td>
		<td align="center"><a href="edit_mengajar.php?id_mengajar=<?php echo $id_mengajar ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_mengajar.php?id_mengajar=<?php echo $id_mengajar ?>">HAPUS</a></td>
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
