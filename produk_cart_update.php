<?php
include("koneksi.php");
$id = $_POST['id_keranjang'];
$banyak = $_POST['banyak_produk'];

mysqli_query($conn,"update keranjang set banyak_produk='$banyak' where id_keranjang='$id'");

header("location:product_cart.php");   
?>