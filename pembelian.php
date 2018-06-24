<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    include('session.php');
  }
  include 'koneksi.php';
  $id = $_GET['id_produk'];
  $query = "SELECT * FROM produk WHERE id_produk='$id'";
  $hasil = mysqli_query($connection,$query);
  $row = mysqli_fetch_assoc($hasil);
  $image = $row['file'];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Penjualan Ikan | Produk</title>

    <meta name="keywords" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="style/style.css">

    <!-- Bootstrap and Font Awesome css -->

</head>

<body>

  <nav style="background-color: #EFEFEF; color:rgb(130, 202, 247); height:90px; line-height:90px">
    <div class="nav-wrapper nav-font">
      <a href="home.php" class="brand-logo" style="margin-left: 20px"><img src="images/logo.png" style="height:90px;"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down" style="margin-right: 80px">
        <li><a href="sass.html" style="text-decoration: none; font-size:20px; color:rgb(52, 52, 52)">Home</a></li>
        <li class="active"><a href="produk.php" style="text-decoration: none; font-size:20px; color:rgb(52, 52, 52)">Produk</a></li>
        <li><a href="logout.php" style="text-decoration: none;font-size:20px; color:rgb(52, 52, 52)" onclick="return confirm('yakin ingin logout?')">Logout</a></li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="container">
      <form>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label><h5>Nama Lengkap</h5></label>
      <input type="text" class="form-control" placeholder="Masukan Nama Lengkap Anda">
    </div>
    <div class="form-group col-md-6">
      <label><h5>Email</h5></label>
      <input type="email" class="form-control" placeholder="Masukan Alamat Email">
    </div>
    </div>
    <div class="form-group">
    <label><h5>Alamat</h5></label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Masukan Alamat">
    </div>
    <div class="form-group">
    <label>No Telp</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Masukan Nomor Telp">
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label>Jumlah</label>
      <input type="number" class="form-control" id="inputCity" placeholder="Masukan Jumlah Yang Anda Beli">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>
  </div>

  <div class="footer">
    <p style="font-size:12px;">2018. @TeamLabs.id</p>
  </div>

    <!-- /#all -->


    <!-- #### JAVASCRIPT FILES ### -->
    <script type="text/javascript">
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.sidenav');
        var instances = M.Sidenav.init(elems, options);
      });

      // Or with jQuery

      $(document).ready(function(){
        $('.sidenav').sidenav();
      });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</body>

</html>
