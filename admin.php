<!DOCTYPE html>
<html>
<head>
	<title>INPUT PRODUK</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/10e6f0c3f8.js" crossorigin="anonymous"></script>
        <style >
			h1{
			  font-family: sans-serif;
			}
			 
			table {
			  font-family: Arial, Helvetica, sans-serif;
			  color: #666;
			  text-shadow: 1px 1px 0px #fff;
			  background: #eaebec;
			  border: #ccc 1px solid;
			}
			 
			table th {
			  padding: 15px 35px;
			  border-left:1px solid #e0e0e0;
			  border-bottom: 1px solid #e0e0e0;
			  background: #ededed;
			}
			 
			table th:first-child{  
			  border-left:none;  
			}
			 
			table tr {
			  text-align: center;
			  padding-left: 20px;
			}
			 
			table td:first-child {
			  text-align: left;
			  padding-left: 20px;
			  border-left: 0;
			}
			 
			table td {
			  padding: 15px 35px;
			  border-top: 1px solid #ffffff;
			  border-bottom: 1px solid #e0e0e0;
			  border-left: 1px solid #e0e0e0;
			  background: #fafafa;
			  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
			  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
			}
			 
			table tr:last-child td {
			  border-bottom: 0;
			}
			 
			table tr:last-child td:first-child {
			  -moz-border-radius-bottomleft: 3px;
			  -webkit-border-bottom-left-radius: 3px;
			  border-bottom-left-radius: 3px;
			}
			 
			table tr:last-child td:last-child {
			  -moz-border-radius-bottomright: 3px;
			  -webkit-border-bottom-right-radius: 3px;
			  border-bottom-right-radius: 3px;
			}
			 
			table tr:hover td {
			  background: #f2f2f2;
			  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
			  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
			}
			.carousel h1{
        text-align: center;
        margin-top: -450px;
      }
      h1{
        text-align: center;
      }
        </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <a class="navbar-brand" href="#">PEMPEK 3G-A</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link " href="desktopadmin.php">BERANDA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active" >
        <a class="nav-link" href="admin.php">INPUT PRODUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="acc.php">ACC PEMBAYARAN</a>
      </li>
      <li class="nav-item">
      	<a class="nav-link" href="alamatpembeli.php">ALAMAT PEMBELI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>
<br>
	<center><h1>INPUT PRODUUK</h1>
	<br/>
	<a href="login.php">LOGOUT</a>
	<br>
	<br>
	<a href="tambah.php">+ TAMBAH PRODUK</a>
	<br/>
	<br/>
	<table border="1">
		
			<tr>
				<th>No</th>
				<th>Gambar</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Action</th>
			</tr>
			
			<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"select * from produk");
				while($d = mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><img src="img/<?php echo $d['gambar'];?>" alt="<?php echo $d['nama'];?>" width="100px" height="100px"></td>
						<td><?php echo $d['nama']; ?></td>
						<td><?php echo $d['harga']; ?></td>
						<td>
							<a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
							<a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
						</td>
					</tr>
				<?php } ?>
	</table></center>
</body>
</html>