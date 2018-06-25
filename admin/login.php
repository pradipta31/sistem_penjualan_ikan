<?php
  session_start(); // sesi dimulai
  $error = ''; // set error menjadi kosong
  if (isset($_POST['submit'])) { // mengambil name submit
    if (empty($_POST['email']) or empty($_POST['password'])) {
      $error = "Email or Password is invalid"; // jika email atau password kosong maka muncul pesan error
    }else{
      $email = $_POST['email']; // mengambil data email
      $password = $_POST['password']; // mengambil data password
      $connection = mysqli_connect("localhost","root","");
      // $email = stripslashes($email);
      // $password = stripslashes($password);
      // $email = mysqli_real_escape_string($connection,$email);
      // $password = mysqli_real_escape_string($connection,$password);
      $db = mysqli_select_db($connection,"sistem_perikanan"); // pilih database
      // execute query dimana password dan email yang sudah diambil diatas tadi
      $query = mysqli_query($connection, "SELECT * FROM admin WHERE password ='$password' AND email = '$email'");
      $userid = mysqli_fetch_assoc($query); // menampilkan index
      $rows = mysqli_num_rows($query); // menampilkan nomor
      if ($rows == 1) { // jika nomor adalah benar
        $_SESSION['login_admin'] = $email; // membuat session baru yaitu admin dengan mengambil data email
        $_SESSION['id_admin'] = $userid['id_admin']; // menjalankan sesion id admin
        header("location: dashboard.php"); // menuju ke halaman dashboard.php
      }else {
        echo "<script>alert('Email atau Password salah!');
          window.location.href='index.php';
        </script>";
      }
      mysqli_close($connection);
    }
  }
?>
