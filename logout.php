<?php 
	// mengaktifkan session
session_start();

//menghapus semua session
session_destroy();

//mengalihkkan halaman sambil mengirim pesan logout
header("location:project.php?pesan=logout")
 ?>