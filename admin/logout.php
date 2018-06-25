<?php
  session_start(); // session dimulai
  session_unset(); // sesion di putus
  session_destroy(); // session dihancurkan

  header('location: index.php'); // menuju ke index.php
  exit();
 ?>
