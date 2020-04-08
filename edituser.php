<!DOCTYPE html>
<html>
<head>
	<title>EDIT DATA USER</title>
</head>
<body>
 
	
	<br/>
	<a href="desktopadmin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA USER</h3>
 
	<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from login where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_edituser.php">
			<table>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
				<tr>
					<td>Telephone</td>
					<td><input type="text" name="telephone" value="<?php echo $d['telephone']; ?>"></td>
				</tr>
				<tr>
					<td>Tipe User</td>
					<td><input type="text" name="tipeuser" value="<?php echo $d['tipeuser']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>