<?php 
session_start();

include 'koneksi.php';
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from login where email='$email' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['tipeuser']=="admin"){
 
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['tipeuser'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:desktopadmin.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['tipeuser']=="user"){
		// buat session login dan username
		$_SESSION['email'] = $email;
		$_SESSION['tipeuser'] = "user";
		// alihkan ke halaman dashboard pegawai
		header("location:project2.php");
	}
	else{
 
		// alihkan ke halaman login kembali
		echo "<script>alert('Gagal Login!');window.location='login.php';</script>";
	}
}else{
	header("location:login.php?pesan=gagal");
}
 
?>