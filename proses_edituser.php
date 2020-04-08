<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$telephone = $_POST['telephone'];
$tipeuser = $_POST['tipeuser'];

// update data ke database
mysqli_query($koneksi,"update login set nama='$nama', email='$email', password='$password',telephone='$telephone',tipeuser='$tipeuser' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:desktopadmin.php");

?>