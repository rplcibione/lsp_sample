<?php
include("../koneksi.php");
$id_jurusan = $_GET['id_jurusan'];
          $query = "SELECT * FROM jurusan where id_jurusan = '$id_jurusan'";
          $sql = mysqli_query($con, $query);
          $data=mysqli_fetch_array($sql);
            $id_jurusan = $data['id_jurusan'];
            $nama_jurusan = $data['nama_jurusan'];

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
  <a href="data_kelas.php">Data Kelas</a>
  <a href="data_mapel.php">Data Mata Pelajaran</a>
  <a href="data_jurusan.php" class="active">Data Jurusan</a>
  <a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<fieldset>
  <legend>
    <h2>Edit Data Jurusan</h2>
  </legend>
 <form action="proses/edit_jurusan.php" method="POST">
  <table width="100%">
    <tr>
      <th>Nama Jurusan</td>
      <td><input type="text" value="<?php echo $nama_jurusan;?>" name="nama_jurusan"></td>
    </tr>

  </table>
  <input type="hidden" value="<?php echo $id_jurusan;?>" name="id_jurusan">
  <hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Simpan">
</form>
</fieldset>
</div>
<div class="footer">
  <p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>



