<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$gambar = $_POST['gambar'];

$query = "INSERT INTO bukti_transfer (nama, gambar) VALUES ('$nama','$gambar')";
$result = mysqli_query($koneksi, $query);

if (!$result){
	die ("Tidak dapat diinput").mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Input ! Silahkan Menunggu ACC');window.location='konfirmasi.php';</script>";
}