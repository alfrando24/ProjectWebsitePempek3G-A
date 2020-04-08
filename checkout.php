<!DOCTYPE html>
<html>     
<head>
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
    <style>
      .carousel h1{
        text-align: center;
        margin-top: -450px;
      }
      h1{
        text-align: center;
      }
    </style>
    <title>ALAMAT PEMBELI</title>
</head>
<body>
    <div class="pre-header" style="background-color: green ;">
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
      <li class="nav-item active">
        <a class="nav-link" href="keranjang.php">CHECKOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="konfirmasi.php">KONFIRMASI PEMBAYARAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
      </li>
    </ul>
  </div>
</nav>

<form method="post" class="form" action="proses_alamat.php">
  <h1>ALAMAT PEMBELI</h1>
  <div class="container">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputemail">Email</label>
      <input type="email" class="form-control" id="inputemail" placeholder="example@gmail.com"
        id="user-email"
        class="form-content"
        type="email"
        name="email"
        required/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputnama">Nama</label>
      <input type="text" class="form-control" id="inputnama"
      id="user-nama"
       class="form-content"
       type="text"
       name="nama"
       required/>
    </div>
  </div>
  <div class="form-group">
    <label for="inputalamat">Alamat</label>
    <input type="text" class="form-control" id="inputalamat" placeholder="Jalan Radio Nomor 1"
    id="user-alamat"
       class="form-content"
       type="text"
       name="alamat"
       required/>
  </div>
  <div class="form-group ">
    <label for="inputtelephone">Nomor Telepon / HP</label>
    <input type="text" class="form-control" id="inputtelephone" placeholder="08**********"
    id="user-nomortelephone"
       class="form-content"
       type="number"
       name="telephone"
       required/>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputkotakabupaten">Kota / Kabupaten</label>
      <input type="text" class="form-control" id="inputkotakabupaten"
      id="user-kotakabupaten"
       class="form-content"
       type="text"
       name="kotakabupaten"
       required/>
    </div>
    <div class="form-group col-md-4">
      <label for="inputprovinsi">Provinsi</label>
      <select id="inputprovinsi" class="form-control"
      id="user-provinsi"
       class="form-content"
       type="text"
       name="provinsi"
       required/>
        <option selected>Pilih Provinsi</option>
        <option>Aceh</option>
        <option>Sumatra Utara</option>
        <option>Sumatra barat</option>
        <option>Sumatra Selatan</option>
        <option>Riau</option>
        <option>Kepulauan Riau</option>
        <option>Jambi</option>
        <option>Bengkulu</option>
        <option>Bangka Belitung</option>
        <option>Lampung</option>
        <option>Banten</option>
        <option>Jawa Barat</option>
        <option>DKI Jakarta</option>
        <option>Jawa Tengah</option>
        <option>DIY</option>
        <option>Jawa Timur</option>
        <option>Bali</option>
        <option>NTB</option>
        <option>NTT</option>
        <option>Kalimantan Utara</option>
        <option>Kalimantan Tengah</option>
        <option>Kalimantan Barat</option>
        <option>Kaliantan Timur</option>
        <option>Kalimantan Selatan</option>
        <option>Gorontalo</option>
        <option>Sulawesi Utara</option>
        <option>Sulawesi Barat</option>
        <option>Sulawesi Tengah</option>
        <option>Sulawesi Selatan</option>
        <option>Sulawesi Tenggara</option>
        <option>Maluku Utara</option>
        <option>Maluku</option>
        <option>Papua Barat</option>
        <option>Papua</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputkode_pos">Kode Pos</label>
      <input type="text" class="form-control" id="inputkode_pos"
      id="user-kode_pos"
       class="form-content"
       type="number"
       name="kode_pos"
       required/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputkecamatan">Kecamatan</label>
      <input type="text" class="form-control" id="inputkecamatan"
      id="user-kecamatan"
       class="form-content"
       type="text"
       name="kecamatan"
       required/>
    </div>
    <div class="form-group col-md-6">
      <label for="inputkelurahan">Kelurahan</label>
      <input type="text" class="form-control" id="inputkelurahan"
      id="user-kelurahan"
       class="form-content"
       type="text"
       name="kelurahan"
       required/>
    </div>
  
    
            

            <input class="btn btn-primary btn-lg btn-block"id="submit-btn" type="submit" name="submit" value="LANJUTKAN">
            
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2017-2018 Company Name</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  


</form>
</div>
</div>
</body>
</html>