<?php
  session_start();
  if(!isset($_SESSION['login_user'])){
    include('session.php');
  }

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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

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
      <div class="card text-center" style="margin-top: 50px">
        <?php
          include 'koneksi.php';

          $query = mysqli_query($connection, "SELECT * FROM produk");
          $result = mysqli_fetch_assoc($query);

          $tgl_pembelian = date("Y-m-d H:i:s");
          $nama = $_POST['nama'];
          $email = $_POST['email'];
          $alamat = $_POST['alamat'];
          $jumlah_pembelian = $_POST['jumlah'];
          $no_telp = $_POST['no_telp'];

          $stok = $result['jumlah_produk'];
          $perhitungan = $stok - $jumlah_pembelian;

          $query1 = mysqli_query($connection, "SELECT * FROM transaksi");
          $data = mysqli_fetch_assoc($query1);

          $query2 = mysqli_query($connection, "INSERT INTO produk (jumlah_produk) VALUES ('$jumlah_pembelian')");

          $kode_transaksi = $data['no_transaksi'];
          $kode_urut = (int) substr($kode_transaksi, 3,3);
          $kode_urut++;
          $char = "PRD";
          $no_transaksi = $char . sprintf("%03s", $kode_urut);

          $sql = mysqli_query($connection, "INSERT INTO transaksi (no_transaksi,tgl_transaksi) VALUES ('$no_transaksi','$tgl_pembelian')");
          mysqli_close($connection);

        ?>
        <div class="card-header">
          Pembelian Berhasil!!
        </div>
        <div class="card-body">
          <h5 class="card-title">Pembelian Produk : <?php echo $result['nama_produk']; ?></h5>
          <p class="card-text">Telah berhasil Klik tombol dibawah untuk melihat-lihat produk kita lagi</p>
          <a href="produk.php" class="btn btn-primary">KLIK DISINI</a>
        </div>
        <div class="card-footer text-muted">
        </div>
      </div>
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