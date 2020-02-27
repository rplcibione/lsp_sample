<?php
include("../koneksi.php");
$id_mapel = $_GET['id_mapel'];
          $query = "SELECT * FROM mapel where id_mapel = '$id_mapel'";
          $sql = mysqli_query($con, $query);
          $data=mysqli_fetch_array($sql);
            $id_mapel = $data['id_mapel'];
            $nama_mapel = $data['nama_mapel'];

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
  <a href="data_mapel.php" class="active">Data Mata Pelajaran</a>
  <a href="data_jurusan.php">Data Jurusan</a>
  <a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<fieldset>
  <legend>
    <h2>Edit Data Mata Pelajaran</h2>
  </legend>
 <form action="proses/edit_mapel.php" method="POST">
  <table width="100%">
    <tr>
      <th>Nama Mata Pelajaran</td>
      <td><input type="text" value="<?php echo $nama_mapel;?>" name="nama_mapel"></td>
    </tr>

  </table>
  <input type="hidden" value="<?php echo $id_mapel;?>" name="id_mapel">
  <hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Simpan">
</form>
</fieldset>
</div>
<div class="footer">
  <p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>



