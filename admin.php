<?php
include("koneksi.php");
?>

<html>
<head>
		<title>Penilaian</title>
	 <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
  <img src="gambar/header.jpg" width="100%" height="40%">
</div>
<div class="menu">
  <b>
	<a href="index.php" class="active">Home</a>
	<a href="logout.php" style="float: right;">Logout</a>
</b>
</div>
<div class="kiri">
	<br>
	<fieldset>
		<legend>
       	<?php if(isset($_SESSION['username'])) echo "ANDA LOGIN SEBAGAI"; else echo "<strong>LOGIN FORM</strong>" ?>
  	</legend>
  <?php
        	if (isset($_SESSION['login'])){ ?>
		<div class="notif-success">
			<h2>
				<center>
					<?php echo $_SESSION['nama']; ?>
				</center>
			</h2>
        </div>
					<center>
          	<a href="home.php"><button class="button button1">Beranda</button></a>
          	<a href="logout.php"><button class="button button-danger">Logout</button></a>
					</center>
        <?php }else{ ?>
         	<center>
          		<button onclick="tampilkan_login_siswa()" class="button button1">Siswa</button>
          		<button onclick="tampilkan_login_guru()" class="button button-info">Guru</button>
          		<button onclick="tampilkan_login_admin()" class="button button-danger">Admin</button>
          </center>
        <hr>
	<div id="title_login">
		<?php
            if (isset($_SESSION['notif'])){
             	echo $_SESSION['notif'];
              	unset($_SESSION['notif']);
            	}else{ ?>
            Pilihlah Menu login sesuai status kerja anda
      	<?php } ?>
	</div>
	<div id="login_siswa" style="display: none;">
            <strong>Login Siswa</strong>
						<br>
		<form action="aksi_login/login_siswa.php" method="post">
			<table>
				<tr>
					<td width="25%"><strong>NIS</td>
					<td width="25%"></strong> <input type="text" name="nis" maxlength="10" required></td>
				</tr>
				<tr>
					<td width="25%"><strong>Password</strong></td>
					<td width="25%"><input type="password" name="password" required></td>
           		</tr>
            </table>
            	<center>
            		<button class="button button-success" type="submit" name="button">LOGIN</button>
				</center>
		</form>
	</div>
  <div id="login_guru" style="display: none;">
           	<strong>Login Guru</strong>
						<br>
       	<form action="aksi_login/login_guru.php" method="post">
			<table>
				<tr>
					<td width="25%"><strong>NIP</td>
					<td width="25%"></strong> <input type="text" name="nip" maxlength="18" required></td>
				</tr>
				<tr>
					<td width="25%"><strong>Password</strong></td>
					<td width="25%"><input type="password" name="password" required></td>
           		</tr>
            </table>
            	<center>
            		<button class="button button-success" type="submit" name="button">LOGIN</button>
				</center>
		</form>
  </div>
  <div id="login_admin" style="display: none;">
            <strong>Login Admin</strong>
						<br>
        <form action="login_admin.php" method="POST">
			<table>
				<tr>
					<td width="25%"><strong>Username</td>
					<td width="25%"></strong> <input type="text" name="username" required></td>
				</tr>
				<tr>
					<td width="25%"><strong>Password</strong></td>
					<td width="25%"><input type="password" name="password" required></td>
           		</tr>
            </table>
            	<center>
            		<button class="button button-success" type="submit">LOGIN</button>
          		</center>
		</form>
	</div>
		<?php } ?>
	</fieldset>


</div>

<script type="text/javascript">
  login_siswa = document.getElementById('login_siswa');
  login_guru  = document.getElementById('login_guru');
  login_admin = document.getElementById('login_admin');
  title_login = document.getElementById('title_login');

  function tampilkan_login_siswa(){
    login_siswa.style.display = 'block';
    login_guru.style.display = 'none';
    login_admin.style.display = 'none';
    title_login.style.display = 'none';
  }

  function tampilkan_login_guru(){
    login_siswa.style.display = 'none';
    login_guru.style.display = 'block';
    login_admin.style.display = 'none';
    title_login.style.display = 'none';
  }

  function tampilkan_login_admin(){
    login_siswa.style.display = 'none';
    login_guru.style.display = 'none';
    login_admin.style.display = 'block';
    title_login.style.display = 'none';
  }


</script>

<div class="kanan">

<h1>
	<form action="login_admin.php" method="POST">
      <table>
        <tr>
          <td width="25%"><strong>Username</td>
          <td width="25%"></strong> <input type="text" name="username" required></td>
        </tr>
        <tr>
          <td width="25%"><strong>Password</strong></td>
          <td width="25%"><input type="password" name="password" required></td>
              </tr>
            </table>
              <center>
                <button class="button button-success" type="submit">LOGIN</button>
              </center>
    </form>
</div>
<div class="kirikuyy">
	

</div>
<div class="footer">
	<p>&copy; 2019 - <strong>Pascal Wilman</strong></p>
</div>
</body>
</html>
