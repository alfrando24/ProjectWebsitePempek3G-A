<?php 
	include('koneksi.php');

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$email = $_POST['email'];

	$query = "INSERT INTO konfirmasi ( nama, alamat, email ) VALUES ('$nama', '$alamat', '$email')";
	$hasil = mysqli_query($koneksi, $query);
	if(!$koneksi){
		die("Tidak dapat diakses.").mysqli_errno($koneksi). '-'.mysqli_error($koneksi);
	}else{
		echo "<script>alert('Konfirmasi Berhasil ! Mohon Ditunggu Barangnya Ya !');window.location='index.php';</script>";
	}
 ?>