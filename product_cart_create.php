<?php
include("koneksi.php");
$id = $_POST['id_produk'];
$user = $_POST['nama_pel'];
$banyak = $_POST['banyak_produk'];

// menginput data ke database
mysqli_query($conn,"insert into keranjang values('','$id','$user','$banyak')");

header("location:product_cart.php");   
?>