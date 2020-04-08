<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH PRODUK</title>
</head>
<body>

	
	<br/>
	<a href="admin.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH PRODUK</h3>
	<form method="post" action="tambah_aksi.php">
		<table>
			<tr>

		        <td>Gambar Produk</td>


		        <td><input type="file" name="gambar" accept=".jpg, .png"/></td>

		    </tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>