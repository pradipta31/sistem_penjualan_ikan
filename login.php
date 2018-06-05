<?php
  session_start();
  $error = '';
  if (isset($_POST['submit'])) {
    if (empty($_POST['email']) or empty($_POST['password'])) {
      $error = "Email or Password is invalid";
    }else{
      $email = $_POST['email'];
      $password = $_POST['password'];
      $connection = mysqli_connect("localhost","root","");
      // $email = stripslashes($email);
      // $password = stripslashes($password);
      // $email = mysqli_real_escape_string($connection,$email);
      // $password = mysqli_real_escape_string($connection,$password);
      $db = mysqli_select_db($connection,"sistem_perikanan");
      $query = mysqli_query($connection, "SELECT * FROM anggota WHERE password ='$password' AND email = '$email'");
      $userid = mysqli_fetch_assoc($query);
      $rows = mysqli_num_rows($query);
      if ($rows == 1) {
        $_SESSION['login_user'] = $email;
        $_SESSION['id_anggota'] = $userid['id_anggota'];
        header("location: home.php");
      }else {
        $error = "Email atau Password belum terdaftar";
      }
      mysqli_close($connection);
    }
  }
?>
