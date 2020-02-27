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
  <a href="data_siswa.php">Data Siswa</a>
  <a href="data_guru.php">Data Guru</a>
  <a href="data_kelas.php" class="active">Data Kelas</a>
  <a href="data_mapel.php">Data Mata Pelajaran</a>
  <a href="data_jurusan.php">Data Jurusan</a>
  <a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<fieldset>
  <legend>
    <h2>Tambah Data Kelas</h2>
  </legend>
 <form action="proses/tambah_kelas.php" method="POST">
  <table width="100%">
    <tr>
      <th>Nama Kelas</td>
      <td><input type="text" name="nama_kelas" required></td>
    </tr>
    <tr>
      <th>Jurusan</td>
      <td>
        <select class="" name="id_jurusan">
          <?php
          include "../koneksi.php";
          $query = "SELECT * FROM jurusan";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $nama_jurusan = $data['nama_jurusan'];
            $id_jurusan = $data['id_jurusan'];
          ?>
          <option value="<?php echo $id_jurusan
          ;?>"><?php echo $nama_jurusan;?></option>
        <?php }?>
        </select>
      </td>
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



