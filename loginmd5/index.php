<!DOCTYPE html>
<html>
<?php
  $imagePath = 'image/biru.jpg';
?>
<head>
	<title>Halaman Login Admin</title>
</head>
<head>
		<style>
		body {
			background-image: url('<?php echo $imagePath; ?>');
			background-size: cover;
			/* Tambahan gaya CSS lainnya */
		}
		td {
			color: white;
		}
		</style>
</head>
<body>
	<center>
	<font color="magenta">
		<h2>Login Admin</h2>
	</font>
	<br/>
	<!-- cek pesan notifikasi -->
	<font color="white">
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Anda harus login untuk mengakses halaman admin";
		}
	}
	?>
	</font>
	<br/>
	<br/>
	<form method="post" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan password"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" value="LOGIN"></td>
			</tr>
		</table>			
	</form>
</center>	
</body>
</html>