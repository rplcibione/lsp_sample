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
  <a href="data_mengajar.php" class="active">Data Mengajar</a>
  <a href="data_siswa.php">Data Siswa</a>
  <a href="data_guru.php">Data Guru</a>
  <a href="data_kelas.php">Data Kelas</a>
  <a href="data_mapel.php">Data Mata Pelajaran</a>
  <a href="data_jurusan.php">Data Jurusan</a>
  <a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kanan">
<fieldset>
  <legend>
    <h2>Tambah Data Mengajar</h2>
  </legend>
 <form action="proses/tambah_mengajar.php" method="POST">
  <table width="100%">
    <tr>
      <th>Nama Guru</td>
      <td>
        <select class="" name="nip">
           <?php
          include "../koneksi.php";
          $query = "SELECT * FROM guru";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $nama_guru = $data['nama_guru'];
            $nip = $data['nip'];
          ?>
          <option value="<?php echo $nip;?>"><?php echo $nama_guru;?></option>
        <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Mapel</td>
      <td>
        <select class="" name="id_mapel">
           <?php
          include "../koneksi.php";
          $query = "SELECT * FROM mapel";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $nama_mapel = $data['nama_mapel'];
            $id_mapel = $data['id_mapel'];
          ?>
          <option value="<?php echo $id_mapel;?>"><?php echo $nama_mapel;?></option>
        <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Kelas</td>
      <td>
        <select class="" name="id_kelas">
           <?php
          include "../koneksi.php";
          $query = "SELECT * FROM kelas";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $nama_kelas = $data['nama_kelas'];
            $id_kelas = $data['id_kelas'];
          ?>
          <option value="<?php echo $id_kelas;?>"><?php echo $nama_kelas;?></option>
        <?php } ?>
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



