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
  $stok = $row['jumlah_produk'];
  if ($stok < 1) {
    echo "STOK Habis";
    header('location: produk.php');
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
        <li><a href="home.php" style="text-decoration: none; font-size:20px; color:rgb(52, 52, 52)">Home</a></li>
        <li class="active"><a href="produk.php" style="text-decoration: none; font-size:20px; color:rgb(52, 52, 52)">Produk</a></li>
        <li><a href="logout.php" style="text-decoration: none;font-size:20px; color:rgb(52, 52, 52)" onclick="return confirm('yakin ingin logout?')">Logout</a></li>
      </ul>
    </div>
  </nav>


  <div class="container-fluid" style="width: 100%; height: 100%">
    <div class="container">
      <div class="form-group">
        <h4>Pesanan : <?php echo $row['nama_produk'];?></h4>
        <img src="./admin/images/<?=$row['file'];?>" style="height:50px; width: 50px; border-radius: 5px">
      </div>
      <form style="margin-top: 50px" action="proses-pembelian.php" method="post">
        <input type="hidden" name="id_produk">

        <div class="form-row">
          <div class="form-group col-md-6">
            <label><h5>Nama Lengkap</h5></label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="nama">
          </div>
          <div class="form-group col-md-6">
            <label><h5>Email</h5></label>
            <input type="email" class="form-control" placeholder="Masukkan Alamat Email" name="email">
          </div>
        </div>
        <div class="form-group">
          <label><h5>Alamat</h5></label>
          <input type="text" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat">
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label><h5>Jumlah Barang</h5></label>
            <input type="number" class="form-control" name="jumlah">
          </div>
          <div class="form-group col-md-2">
            <label>Stok Barang : <?php echo $row['jumlah_produk'];?></label>
          </div>
          <div class="form-group col-md-4">
            <label><h5>No Telp</h5></label>
            <input type="text" class="form-control" name="no_telp">
          </div>
        </div>
        <?php
          $query1 = mysqli_query($connection, "SELECT * FROM transaksi");
          $rows = mysqli_fetch_assoc($query1);
        ?>
        <input type="submit" name="submit" value="Simpan" id="'.$row['id_produk'].'" class="btn btn-primary">
        <!-- <a href="proses-pembelian.php?id_transaksi=<?php echo "$rows[id_transaksi]"; ?>" class="btn btn-primary">Simpan</a> -->
        <a href="produk.php" class="btn btn-secondary">Kembali</a>
        <input type="text" name="nama_produk" value="<?php echo $row['nama_produk'];?>" readonly>
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
