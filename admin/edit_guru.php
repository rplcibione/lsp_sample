<?php
include("../koneksi.php");
$nip = $_GET['nip'];
          $query = "SELECT * FROM guru where nip = '$nip'";
          $sql = mysqli_query($con, $query);
          $data=mysqli_fetch_array($sql);
            $nip = $data['nip'];
            $nama_guru = $data['nama_guru'];
            $jk = $data['jk'];
            $alamat = $data['alamat'];
            $password = $data['password'];

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
  <a href="data_siswa.php" class="active">Data Siswa</a>
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
 <form action="proses/edit_guru.php" method="POST">
  <table width="100%">
    <tr>
      <th>NIS</td>
      <td><input type="text" maxlength="10" value="<?php echo $nip;?>" name="nip" readonly></td>
    </tr>
    <tr>
      <th>Nama Guru</td>
      <td><input type="text" value="<?php echo $nama_guru;?>" name="nama_guru" required></td>
    </tr>
    <tr>
      <th>Jenis Kelamin</td>
      <td>
        <select class="" name="jk">
          <option value="<?php echo $jk
          ;?>">--<?php echo $jk;?>--</option>
          <option value="L">Laki - Laki</option>
          <option value="P">Perempuan</option>
        </select>
      </td>
    </tr>
    <tr>
      <th>Alamat</td>
      <td>
        <textarea name="alamat" rows="8" cols="30" required><?php echo $alamat;?></textarea>
      </td>
    </tr>
    <tr>
      <th>Password</td>
      <td><input type="text" value="<?php echo $password;?>" name="password"></td>
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



