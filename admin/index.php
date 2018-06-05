<?php
  include ('login.php'); // Memasukkan Skrip login
  if(isset($_SESSION['login_admin'])){
    header("location: dashboard.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Penjualan Ikan | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../style/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../style/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../style/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../style/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <style media="screen">
  body{
    background-image:url(../picture/bg.png);
    background-size: 100% 770px;
    background-repeat: no-repeat;
  }

  #pesan-gagal{
    position: fixed;
    top:0px;
    left:0px;
    right: 0px;
    bottom: 0px;
    z-index: 999999999;
    background: rgba(0,0,0,.7);
    color: #fff;
  }
  #pesannya{
    width:310px;
    background: #fff;
    height: 100px;
    border-radius: 4px;
    color: #333;
    box-sizing: border-box;
    padding: 20px;
    font-size: 20px;
    margin:200px auto;
  }
  .clogin{
    height: 310px;
  }
  input[type="submit"]{
    margin-top: -20px;
    width: 90px;
    text-align: left;
    background-color: white;
    color: #2c3e50;
  }
  </style>
<div class="login-box">
  <div class="login-logo">
    <b>Sistem Penjualan Ikan</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Admin Login</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-input">
        <?php
          if(isset($_POST['submit']) && empty($_SESSION['login_user'])){
            echo "
                <div id='pesan-gagal'>
                      <div id='pesannya'>
                          Username atau Password salah!
                          <br>
                          <button id='butt' style='margin-left:114px'>OK</button>
                      </div>
                </div>
            ";
          }else{}
        ?>
      </div>
      <div class="row">
        <div class="col-xs-12">
          <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="../style/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../style/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../style/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
