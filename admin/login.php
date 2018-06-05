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
      $query = mysqli_query($connection, "SELECT * FROM admin WHERE password ='$password' AND email = '$email'");
      $userid = mysqli_fetch_assoc($query);
      $rows = mysqli_num_rows($query);
      if ($rows == 1) {
        $_SESSION['login_admin'] = $email;
        $_SESSION['id_admin'] = $userid['id_admin'];
        header("location: dashboard.php");
      }else {
        echo "<script>alert('Email atau Password salah!');
          window.location.href='index.php';
        </script>";
      }
      mysqli_close($connection);
    }
  }
?>
