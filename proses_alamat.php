<?php 

include 'koneksi.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telephone = $_POST['telephone'];
$kotakabupaten = $_POST['kotakabupaten'];
$provinsi = $_POST['provinsi'];
$kode_pos = $_POST['kode_pos'];
$kecamatan = $_POST['kecamatan'];
$kelurahan = $_POST['kelurahan'];


$query = "INSERT INTO alamat (email, nama, alamat, telephone, kotakabupaten, provinsi, kode_pos, kecamatan, kelurahan) VALUES ('$email','$nama','$alamat','$telephone','$kotakabupaten','$provinsi','$kode_pos','$kecamatan','$kelurahan')";
$result = mysqli_query($koneksi, $query);

if (!$result){
	die ("Tidak dapat diakses").mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Input ! Silahkan Lanjutkan');window.location='upload.php';</script>";
}
 ?>