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
<fieldset>
  <legend>
    <h2>Tambah Data Nilai</h2>
  </legend>
 <form action="proses/tambah_nilai.php" method="POST">
  <table width="100%">
    <tr>
      <th>ID MENGAJAR</td>
      <td>
        <select class="" name="id_mengajar">
          <?php
          $nip = $_SESSION['nip'];
          include "../koneksi.php";
          $query = "SELECT b.id_mengajar,b.nip,c.nama_kelas,d.nama_mapel,e.nama_guru FROM mengajar b LEFT JOIN kelas c on b.id_kelas = c.id_kelas LEFT JOIN mapel d on b.id_mapel = d.id_mapel LEFT JOIN guru e on b.nip = e.nip where b.nip = '$nip'";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $id_mengajar = $data['id_mengajar'];
            $nip = $data['nip'];
            $nama_kelas = $data['nama_kelas'];
            $nama_mapel = $data['nama_mapel'];
             $nama_guru = $data['nama_guru'];
          ?>
          <option value="<?php echo $id_mengajar;?>"><?php echo $id_mengajar;?> - <?php echo $nama_guru;?> - <?php echo $nama_mapel;?> - <?php echo $nama_kelas;?></option>
              <?php }?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Nama Siswa</td>
      <td>
        <select class="" name="nis">
           <?php
          $nip = $_SESSION['nip'];
          include "../koneksi.php";
          $query = "SELECT b.id_mengajar,b.nip,c.nama_kelas,f.nama_siswa,f.nis FROM mengajar b LEFT JOIN kelas c on b.id_kelas = c.id_kelas LEFT JOIN siswa f on c.id_kelas = f.id_kelas";
          $sql = mysqli_query($con, $query);
          while ($data=mysqli_fetch_array($sql)) {
            $nama_siswa = $data['nama_siswa'];
             $nis = $data['nis'];

          ?>
          <option value="<?php echo $nis;?>"><?php echo $nama_siswa;?></option>
        <?php } ?>
        </select>
      </td>
    </tr>
    <tr>
      <th>Nilai UH</th>
      <td><input type="number" name="uh" required></td>
    </tr>
    <tr>
      <th>Nilai UTS</th>
      <td><input type="number" name="uts" required></td>
    </tr>
    <tr>
      <th>Nilai UAS</th>
      <td><input type="number" name="uas" required></td>
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



