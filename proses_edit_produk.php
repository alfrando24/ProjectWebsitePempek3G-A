<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$gambar = $_POST['gambar'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];

// update data ke database
mysqli_query($koneksi,"update produk set gambar='$gambar', nama='$nama', harga='$harga' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");

?>