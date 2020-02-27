<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<?php
$username = $_SESSION['username'];
$query = "SELECT * FROM admin WHERE username='$username'";
$sql = mysqli_query($con, $query);
$data = mysqli_fetch_array($sql);
$status =$data['status'];
if ($status=='admin') {
	echo "<meta http-equiv='refresh' content='0 url=indexadmin.php'>";
}
?>
<?php
$query2 = "SELECT * FROM guru WHERE username='$username'";
$sql2 = mysqli_query($con, $query2);
$data2 = mysqli_fetch_array($sql2);
$nip = $data2['NIP'];
if ($nip) {
?>
<a href="join_kelas.php"><button>Join Kelas</button></a><br><br>
<a href="daftar_nilai.php"><button>Daftar Nilai</button></a>
<?php
}else{
?>
Hi <?php echo $data2['nama_guru']; ?>, Anda Belum Mengisi Formulir, Silahkan Isi Biodata Formulir Terlebih Dahulu<br><br>
<form action="input_nip.php" method="post">
<input type="hidden" name="username" value="<?php echo $username; ?>">
NIP : <input type="text" name="nip"><br>
NUPTK : <input type="text" name="nuptk"><br>
Alamat : <input type="text" name="alamat"><br>
<input type="submit" value="Submit">

</form>
<?php
}
?>
<a href="logout.php">Logout</a>
</body>
</html>