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
	<a href="data_nilai.php" class="active">Data Nilai</a>
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
	<center>
	<h1><u>Data Nilai</u></h1>
	</center>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="tambah_nilai.php"><input type="submit" value="Tambah Data"></a><p>
	<center>
	<table border="1">

	<tr>
		<td align="center" width="15%">NIS</td>
		<td align="center" width="25%">Nama Siswa</td>
		<td align="center" width="25%">Mata Pelajaran</td>
		<td align="center" width="25%">Nama Guru</td>
		<td align="center">Nilai UH</td>
		<td align="center">Nilai UTS</td>
		<td align="center">Nilai UAS</td>
		<td align="center">Nilai Akhir</td>
		<td align="center">Aksi1</td>
		<td align="center">Aksi2</td>
	</tr>
	<?php
	include "../koneksi.php";
		$nip = $_SESSION['nip'];
	$query = "SELECT a.id_nilai,a.nis,g.nama_siswa,e.nama_kelas,c.nama_guru,d.nama_mapel,f.nama_jurusan,a.uh,a.uts,a.uas,a.na  FROM nilai a LEFT JOIN mengajar b on a.id_mengajar = b.id_mengajar LEFT JOIN guru c on b.nip = c.nip LEFT JOIN  mapel d on b.id_mapel = d.id_mapel LEFT JOIN  kelas e on b.id_kelas = e.id_kelas LEFT JOIN jurusan f on e.id_jurusan = f.id_jurusan LEFT JOIN siswa g on a.nis = g.nis where b.nip = '$nip' ";
	$sql = mysqli_query($con, $query);
	while ($data=mysqli_fetch_array($sql)) {
		$nis = $data['nis'];
		$nama_siswa = $data['nama_siswa'];
		$nama_mapel = $data['nama_mapel'];
		$uh = $data['uh'];
		$uts = $data['uts'];
		$uas = $data['uas'];
		$na = $data['na'];
		$nama_guru = $data['nama_guru'];
		$nilai_akhir = round($na,2);
		$id_nilai = $data['id_nilai'];
	?>

	<tr>
		<td align="center"><?php echo $nis; ?></td>
		<td align="center"><?php echo $nama_siswa; ?></td>
		<td align="center"><?php echo $nama_mapel; ?></td>
		<td align="center"><?php echo $nama_guru; ?></td>
		<td align="center"><?php echo $uh; ?></td>
		<td align="center"><?php echo $uts; ?></td>
		<td align="center"><?php echo $uas; ?></td>
		<td align="center"><?php echo $nilai_akhir; ?></td>
		<td align="center"><a href="edit_nilai.php?id_nilai=<?php echo $id_nilai ?>"> EDIT</a></td>
		<td align="center"><a href="proses/hapus_nilai.php?id_nilai=<?php echo $id_nilai ?>">HAPUS</a></td>
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
