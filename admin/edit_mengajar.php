<?php
include("../koneksi.php");
$id_mengajar = $_GET['id_mengajar'];
          $query = "SELECT b.id_mengajar,b.nip,c.nama_kelas,c.id_kelas,d.id_mapel,d.nama_mapel FROM mengajar b LEFT JOIN kelas c on b.id_kelas = c.id_kelas LEFT JOIN mapel d on b.id_mapel = d.id_mapel where b.id_mengajar = '$id_mengajar'";
          $sql = mysqli_query($con, $query);
          $data=mysqli_fetch_array($sql);
            $id_mengajar = $data['id_mengajar'];
            $nip = $data['nip'];
            $nama_kelas = $data['nama_kelas'];
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
    <h2>Edit Data Mengajar</h2>
  </legend>
 <form action="proses/edit_mengajar.php" method="POST">
  <table width="100%">
    <tr>
      <th>NIP</th>
      <td><input type="text" value="<?php echo $nip;?>" disabled=""></td>
    </tr>
    <tr>
      <th>MAPEL</td>
      <td>
        <select class="" name="id_mapel">
          <option value="<?php echo $id_mapel;?>">--<?php echo $nama_mapel;?>--</option>
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
      <th>KELAS</td>
      <td>
        <select class="" name="id_kelas">
          <option value="<?php echo $id_kelas;?>">--<?php echo $nama_kelas;?>--</option>
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
  <input type="hidden" value="<?php echo $id_mengajar;?>" name="id_mengajar">
  <hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Simpan">
</form>
</fieldset>
</div>
<div class="footer">
  <p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>



