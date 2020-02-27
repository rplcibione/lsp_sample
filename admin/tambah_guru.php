<?php
include("../koneksi.php");
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
  <a href="data_siswa.php"  >Data Siswa</a>
  <a href="data_guru.php" class="active">Data Guru</a>
  <a href="data_kelas.php">Data Kelas</a>
  <a href="data_mapel.php">Data Mata Pelajaran</a>
  <a href="data_jurusan.php">Data Jurusan</a>
  <a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<fieldset>
  <legend>
    <h2>Tambah Data Guru</h2>
  </legend>
 <form action="proses/tambah_guru.php" method="POST">
  <table width="100%">
    <tr>
      <th>NIP</td>
      <td><input type="text" maxlength="18" name="nip" required></td>
    </tr>
    <tr>
      <th>Nama Guru</td>
      <td><input type="text" name="nama_guru" required></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</td>
      <td>
        <select class="" name="jk">
          <option value="L">Laki - Laki</option>
          <option value="P">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Alamat</td>
      <td>
        <textarea name="alamat" rows="8" cols="30" required></textarea>
      </td>
    </tr>
     <tr>
      <th>Password</td>
      <td><input type="password" name="password" required></td>
    </tr>
  </table>
<hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Simpan">
</form>
</fieldset>
</div>
<div class="footer">
  <p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>



