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
	<a href="data_guru.php" class="active">Data Guru</a>
	<a href="data_kelas.php">Data Kelas</a>
	<a href="data_mapel.php">Data Mata Pelajaran</a>
	<a href="data_jurusan.php">Data Jurusan</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
	<center>
	<h1><u>Data Guru</u></h1>
	</center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tambah_guru.php"><input type="submit" value="Tambah Data"></a><p>
	<center>
	<table border="1">
	<tr>
		<td align="center">No</td>
		<td align="center"  width="15%">NIP</td>
		<td align="center" width="20%">Nama Guru</td>
		<td align="center"  width="5%">Jenis Kelamin</td>
		<td align="center">Alamat</td>
		<td align="center">Password</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	$no=1;
	include "../koneksi.php";
	$query = "SELECT * FROM guru";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$nip = $data['nip'];
		$nama_guru = $data['nama_guru'];
		$jk = $data['jk'];
		$alamat = $data['alamat'];
		$password = $data['password'];
	?>

	<tr>
		<td align="center"><?php echo $no++; ?></td>
		<td align="center"><?php echo $nip; ?></td>
		<td align="center"><?php echo $nama_guru; ?></td>
		<td align="center"><?php echo $jk; ?></td>
		<td align="center"><?php echo $alamat; ?></td>
		<td align="center"><?php echo $password; ?></td>
		<td align="center"><a href="edit_guru.php?nip=<?php echo $nip ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_guru.php?nip=<?php echo $nip ?>">HAPUS</a></td>
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
