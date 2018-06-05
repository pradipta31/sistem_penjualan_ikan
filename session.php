<?php
  include 'koneksi.php';
  session_start();
  $user_check = $_SESSION['login_user'];
  $query = mysqli_query($connection,"SELECT email FROM anggota WHERE email = '$user_check'");
  $row = mysqli_fetch_assoc($query);
  $login_session = $row['email'];
  if (!isset($login_session)) {
    mysqli_close($connection);
    header("location: index.php");
  }
?>
