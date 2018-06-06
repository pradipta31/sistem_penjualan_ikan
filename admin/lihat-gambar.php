<?php
  include 'koneksi.php';
  $query = "SELECT gambar FROM produk WHERE id_produk = ('$_GET[id_produk]')";
  $hasil = mysqli_query ($connection,$query);
  while ($data = mysqli_fetch_array($hasil)) {
    echo "<center><img src='../images/".$data['gambar']."' width='750px' height='600px'/>
    </br><a href='produk.php'>BACK</a></center>";
  }
  ?>
