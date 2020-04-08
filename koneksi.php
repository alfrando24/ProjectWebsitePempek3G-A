<?php 
   $koneksi = mysqli_connect("localhost","root","","project");

   if(mysqli_connect_errno()){
      die("Tidak Dapat Diakses".mysqli_connect_error());
   }
?>