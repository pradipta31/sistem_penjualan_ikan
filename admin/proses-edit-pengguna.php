<?php
  session_start();
  if(!isset($_SESSION['login_admin'])){
    include('session.php');
  }
  $nama = ( isset($_SESSION['login_admin']) ) ? $_SESSION['login_admin'] : '';
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tambah Produk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../style/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../style/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../style/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../style/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../style/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../style/dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>IP</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Ikan</b>Predator</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Notifications: style can be found in dropdown.less -->
          <!-- Tasks: style can be found in dropdown.less -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../style/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $nama;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../style/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $nama;?>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat" onclick="return confirm('Yakin ingin Logout ?');">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>


        <li class="treeview">
          <a href="#">
            <i class="fa fa-shopping-cart"></i> <span>Produk</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="tambah-produk.php"><i class="fa fa-circle-o"></i> Tambah Produk</a></li>
            <li><a href="produk.php"><i class="fa fa-circle-o"></i> Produk</a></li>
          </ul>
        </li>

        <li>
          <a href="pengguna.php">
            <i class="fa fa-user"></i> <span>Pengguna</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Tambah Produk lainnya</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Tambah Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="box box-default">
              <?php
                include 'koneksi.php';
                $id = $_POST['id_anggota'];
                $nama = $_POST['nama'];
                $alamat = $_POST['alamat'];
                $no_telp = $_POST['no_hp'];
                $email = $_POST['email'];

                if($connection){
                    $query = mysqli_query($connection,"UPDATE anggota SET nama = '$nama', alamat = '$alamat',
                    no_hp ='$no_telp', email='$email' WHERE id_anggota = '$id'");
                    if ($query) {
                      echo "<div class='alert alert-success alert-dismissible'>
                        <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                        <h4><i class='icon fa fa-check'></i> Berhasil Hapus Pengguna!</h4>
                        <a href='pengguna.php'>Klik disini</a><b> untuk cek</b>
                      </div>";
                      mysqli_close($connection);
                    }else {
                      echo 'QUERY GAGAL';
                    }
                  }else {
                    echo 'KONEKSI DATABASE GAGAL';
                  }
              ?>
          </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2018 <a href="#">PT. Ikan Jaya Makmur Abadi</a>.</strong> All rights
    reserved.
  </footer>
</div>
<script src="../style/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../style/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../style/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../style/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="../style/bower_components/fastclick/lib/fastclick.js"></script>
<script src="../style/dist/js/adminlte.min.js"></script>
<script src="../style/dist/js/demo.js"></script>
</body>
</html>
