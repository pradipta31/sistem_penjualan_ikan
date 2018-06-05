<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Penjualan Ikan | Pendaftaran member baru</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="style/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="style/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="style/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="style/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Sistem Penjualan Ikan</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Register to start your transaction</p>

    <form action="proses-pendaftaran.php" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama" name="nama">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Alamat" name="alamat">
        <span class="glyphicon glyphicon-home form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nomor Telepon" name="no_hp">
        <span class="glyphicon glyphicon-phone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="Email" name="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-6">
          <a href="index.php" class="btn btn-danger btn-block btn-flat">Cancel</a>
        </div>
        <div class="col-xs-6">
          <input type="submit" name="submit" class="btn btn-primary btn-block btn-flat" value="Register">
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
</body>
</html>
