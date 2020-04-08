<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

// menginput data ke database
mysqli_query($koneksi,"insert into produk values('','$gambar','$nama','$harga')");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>