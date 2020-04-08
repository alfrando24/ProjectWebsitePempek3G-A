<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Place your kit's code here -->
    <script src="https://kit.fontawesome.com/10e6f0c3f8.js" crossorigin="anonymous"></script>
    <style>
      #card {
          background: #fbfbfb;
          border-radius: 8px;
          box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
          height: 410px;
          margin: 6rem auto 8.1rem auto;
          width: 329px;
    }
    #card-content {
          padding: 12px 44px;
    }
    #card-title {
          font-family: "Raleway Thin", sans-serif;
        letter-spacing: 4px;
          padding-bottom: 23px;
          padding-top: 13px;
          text-align: center;
    }
    .underline-title {
          background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
          height: 2px;
          margin: -1.1rem auto 0 auto;
          width: 89px;
    }
    a {
        text-decoration: none;
    }
    label {
        font-family: "Raleway", sans-serif;
        font-size: 11pt;
    }
    #forgot-pass {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 3px;
        text-align: right;
    }
    .form {
        align-items: left;
        display: flex;
        flex-direction: column;
    }
    .form-border {
        background: -webkit-linear-gradient(right, #a6f77b, #2ec06f);
        height: 1px;
        width: 100%;
    }
    .form-content {
        background: #fbfbfb;
        border: none;
        outline: none;
        padding-top: 14px;
    }
    #signup {
        color: #2dbd6e;
        font-family: "Raleway", sans-serif;
        font-size: 10pt;
        margin-top: 16px;
        text-align: center;
    }
    #submit-btn {
        background: -webkit-linear-gradient(right, #a6f77b, #2dbd6e);
        border: none;
        border-radius: 21px;
        box-shadow: 0px 1px 8px #24c64f;
        cursor: pointer;
        color: white;
        font-family: "Raleway SemiBold", sans-serif;
        height: 42.3px;
        margin: 0 auto;
        margin-top: 50px;
        transition: 0.25s;
        width: 153px;
    }
    #submit-btn:hover {
        box-shadow: 0px 1px 18px #24c64f;
    }
    </style>
    <title>KONFIRMASI</title>
  </head>
  <body>
    <div class="pre-header" style="background-color: green ;" "margin-bottom: 100px;">
        <div class="container" style="color:black;">
            <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
                <div class="col-md-6 col-sm-6 additional-shop-info">
                    <ol class="list-unstyled list-inline">
                      <li><i class="fa fa-phone"></i><span> 081320198038</span>
                      <i class="fab fa-instagram"></i><a style="color:black;" href="https://www.instagram.com/pempek_tri_ji_ei/"><span> pempek_tri_ji_ei</span></a></span>
                     
                    </ol>
                </div>
                
            </div>
        </div>        
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
  <a class="navbar-brand" href="#">PEMPEK 3G-A</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="project2.php">BERANDA<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="produk2.php">PRODUK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="testimoni2.html">TESTIMONI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="kontak2.html">KONTAK</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="keranjang.php">CHECKOUT</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#">KONFIRMASI PEMBAYARAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
    
  </div>
</nav>
<div class="container">
<dir></dir>
    <div id="card-content">
      <div id="card-title">
      <h2>KONFIRMASI PEMBAYARAN</h2>
      
      <div id="card">
        <div id="card-content">
      <div id="card-title">
    <form method="post" class="form" action="proses_konfirmasi.php"> 
      <label for="user-email" style="padding-top:13px">&nbsp;Nama</label>
      <input
      id="user-nama"
      class="form-content"
      type="nama"
      name="nama"
      autocomplete="on"
      required />
      <div class="form-border"></div>
    <label for="user-gambar" style="padding-top:22px">&nbsp;Bukti Transfer</label>
      <input 
       id="user-bukti transfer"
       class="form-content"
       type="file"
       name="gambar"
       accept=".jpg, .png" 
       required />
      <div class="form-border"></div>
    <input id="submit-btn" type="submit" name="submit" value="SUBMIT" >    
  </form>
  </div>
</div>