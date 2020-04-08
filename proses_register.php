<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['telephone'];

$query = "INSERT INTO login (nama, email, password, telephone) VALUES ('$nama','$email','$password','$telephone')";
$result = mysqli_query($koneksi, $query);

if (!$result){
	die ("Tidak dapat diakses").mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Terdaftar ! Silahkan Login Untuk Masuk Website');window.location='login.php';</script>";
}