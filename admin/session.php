<?php
  include 'koneksi.php';
  session_start(); // memulai sesi
  $user_check = $_SESSION['login_admin']; // cek user session login admin
  $query = mysqli_query($connection,"SELECT email FROM admin WHERE email = '$user_check'");
  $row = mysqli_fetch_assoc($query);
  $login_session = $row['email']; // login session adalah email
  if (!isset($login_session)) {
    mysqli_close($connection);
    header("location: index.php");
  }
?>
