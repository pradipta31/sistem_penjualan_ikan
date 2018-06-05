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
  <form action="" method="post">
    <?php
    include 'koneksi.php';
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($connection){
      echo "<br>";
      echo "<br>";
      echo "Nama : $nama";
      echo "<br>";
      echo "Email : $email";
      echo "<br>";
      $query = "INSERT INTO anggota (nama, alamat, no_hp, email, password)
      VALUES ('$nama','$alamat', '$no_hp', '$email', '$password')";

      $hasil = mysqli_query($connection,$query);
      mysqli_close($connection);
    }else{
      echo "Server not Connected";
    }
    ?>
    <div class="alert alert-success" role="alert">
      Pendaftaran berhasil! <a href="index.php" class="alert-link">Klik disini untuk login</a>
    </div>
  </form>
</div>
</body>
</html>
