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
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
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
  <div class="gallery" id="gallery">
		<div class="container">
			<div class="w3l-heading">
				<h3>PRODUK Pt. IKan Predator</h3>
				<div class="w3ls-border"> </div>
			</div>
		</div>
		<br>
		<!-- Default Thumbnails -->
		<div class="container">
			<div class="row">
				<?php
				include 'koneksi.php';
        $query = "SELECT * FROM produk";
        $hasil = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_array($hasil)) {

					?>

					<div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
            <div class="card" style="height: 350px;">
              <img class="card-img-top" src="./admin/images/<?=$row['file'];?>" alt="Card image cap" height="200px" width="263px">
              <div class="card-body">
                <h5 class="card-title"><center><?= $row['nama_produk'];?></center></h5>
                <h6 class="card-title"><center>Rp. <?= $row['harga_produk'];?></center></h6>
                <a href="pembelian.php?id_produk=<?php echo "$row[id_produk]"; ?>" class="btn btn-primary" style="margin-left: 100px">Beli</a>
                <?php
                  $stok = $row['jumlah_produk'];
                  if ($stok < 1) {
                    echo "STOK HABIS";
                  }
                 ?>
              </div>
            </div>
				</div> <!-- col-6 / end -->
				<?php } ?>
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
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>

</html>
