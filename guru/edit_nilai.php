<?php
include("../koneksi.php");
$id_nilai = $_GET['id_nilai'];
          $query = "SELECT a.id_nilai,a.nis,a.uh,a.uts,a.uas,b.id_mengajar,b.nip,c.nama_kelas,d.nama_mapel,e.nama_guru,f.nama_siswa FROM nilai a LEFT JOIN mengajar b on a.id_mengajar = b.id_mengajar LEFT JOIN kelas c on b.id_kelas = c.id_kelas LEFT JOIN mapel d on b.id_mapel = d.id_mapel LEFT JOIN guru e on b.nip = e.nip LEFT JOIN siswa f on a.nis = f.nis where a.id_nilai = '$id_nilai'";
          $sql = mysqli_query($con, $query);
          $data=mysqli_fetch_array($sql);
            $id_mengajar = $data['id_mengajar'];
            $nip = $data['nip'];
            $nama_kelas = $data['nama_kelas'];
            $nama_mapel = $data['nama_mapel'];
             $nama_guru = $data['nama_guru'];
             $nis = $data['nis'];
              $nama_siswa = $data['nama_siswa'];
              $uh = $data['uh'];
              $uts = $data['uts'];
              $uas = $data['uas'];

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
<fieldset>
  <legend>
    <h2>Edit Data Nilai</h2>
  </legend>
 <form action="proses/edit_nilai.php" method="POST">
  <table width="100%">
    <tr>
      <th>NIP</th>
      <td><input type="text" value="<?php echo $nip;?>" disabled=""></td>
    </tr>
    <tr>
      <th>KELAS</th>
      <td><input type="text" value="<?php echo $nama_kelas;?>" disabled=""></td>
    </tr>
    <tr>
      <th>MAPEL</th>
      <td><input type="text" value="<?php echo $nama_mapel;?>" disabled=""></td>
    </tr>
    <tr>
      <th>NIS</th>
      <td><input type="text" value="<?php echo $nis;?>" disabled=""></td>
    </tr>
    <tr>
      <th>NAMA SISWA</th>
      <td><input type="text" value="<?php echo $nama_siswa;?>" disabled=""></td>
    </tr>
    <tr>
      <th>Nilai UH</th>
      <td><input type="number" value="<?php echo $uh;?>" name="uh" required></td>
    </tr>
    <tr>
      <th>Nilai UTS</th>
      <td><input type="number" value="<?php echo $uts;?>" name="uts" required></td>
    </tr>
    <tr>
      <th>Nilai UAS</th>
      <td><input type="number" value="<?php echo $uas;?>" name="uas" required></td>
    </tr>
  </table>
  <input type="hidden" value="<?php echo $id_nilai;?>" name="id_nilai">
  <hr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Simpan">
</form>
</fieldset>
</div>
<div class="footer">
  <p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>



