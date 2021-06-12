<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Selamat Datang</title>
    <style type="text/css">
      html, body {
        height: auto;
      }
      .navbar .navbar-nav .nav-link {
        color: #ffffff;
        transition: 0.5s;
      }
      .navbar .navbar-nav .nav-link:hover{
        color: #b2c20a;
      }
    </style>
  </head>
  <body style="background: linear-gradient(to bottom, #057d2d 50%, #b2c20a 50% ); background-repeat: no-repeat;">
    <header style="padding: 10px; background-color: #057d2d;">
          <nav class="navbar navbar-expand-lg navbar-transparent bg-transparent">
              <!-- <img src = "assets/image/Gudang_Garam_logo.png" alt = "Learn HTML5" height = "100" width = "150" /> -->
          <a class="navbar-brand" href="#" style="color: #ffffff; font-size: 50px; font-family: fantasy;">
            <u>Kicik-PI Group</u></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-left: 60%;">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#" style="font-family: Verdana; font-size: 20px">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Login/login_akun/') ?>" style="font-family: Verdana; font-size: 20px">Login</a>
              </li>
            </ul>
          </div>
        </nav>
    </header>
      <div class="container" style="margin-top: 100px">
      <div class="row">
        <div class="col-8" style="background-color: #FFFFFF; padding: 0px; margin: 0px;">
          <img src = "assets/image/Warehouse-Inventory2.jpg" alt = "Learn HTML5" height = "450" width = "800" />
        </div>
        <div class="col-4" style="background-color: #ededed; padding: 20px">
          <h1 style="font-family: Arial; color: #b2c20a"><b>INTRODUCE</b> Inventory Web App</h1>
          <p>Aplikasi Pengaturan Gudang Dari Kicik-PI Group, Merupakan Aplikasi Web Yang Membantu Staff Administrasi Gudang Dalam Melakukan Penghitungan Jumlah Stok Barang Yang Masuk Dan Keluar.</p></br>
          <button type="button" class="btn btn-success">Pelajari Selengkapnya</button>
        </div>
      </div>
      </div>
      <div class="container">
      <div class="row" style="height: auto;">
        <div class="col-4" style="background-color: #bababa; padding: 10px 105px; margin: 0px; ">
            <img  style="margin:23px; " src = "assets/image/download.png" alt = "Learn HTML5" height = "125" width = "125" />
             <h5 style="font-family: Arial; color: #057d2d; text-align: center;"><b>HUBUNGI KAMI</b></h5>
              <p style="text-align: center;">Jika Pengguna dan Pengunjung Mengalami Kendala, Segera Hubungi Kami Untuk Penyelesaian.</p></br>
            </div>
        <div class="col-4" style="background-color: #bababa; padding: 10px 105px; margin: 0px;">
            <img style="margin:23px;" src = "assets/image/download (1).png" alt = "Learn HTML5" height = "125" width = "125" />
            <h5 style="font-family: Arial; color: #057d2d; text-align: center;"><b>GUDANG</b></h5>
              <p style="text-align: center;">Kontrol Stok Di Gudang Anda Dengan Aplikasi Kami.</p></br>
        </div>
         <div class="col-4" style="background-color: #bababa; padding: 10px 105px; margin: 0px;">
            <img style="margin:23px;" src = "assets/image/download (2).png" alt = "Learn HTML5" height = "125" width = "125" />
            <h5 style="font-family: Arial; color: #057d2d; text-align: center;"><b>MITRA</b></h5>
              <p style="text-align: center;">Jadilah Mitra Kami dan Kembangkan Usaha Anda Dengan Sistem Administrasi Gudang Melalui Aplikasi Berbasis Web</p></br>
        </div>
      </div>
    </div>
    <footer style="text-align: center; margin-top: 30px; background-color: #404040; padding: 30px 0px; color: #ffffff">
    <div class="pull-right hidden-xs">
      <p>Diberdayakan Oleh :</p>
      <p><b>KICIK-PI GROUP</b></p>
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; <?=date('Y')?></strong>
  </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>