<?php
include('koneksi.php');
session_start();

$user = $_SESSION['username'];
$read = mysqli_query($conn,"select * FROM produk,keranjang 
WHERE username_pel = '$user' AND produk.id_produk = keranjang.id_produk");
echo mysqli_num_rows($read);
while($data = mysqli_fetch_array($read)){
    $date = date("Y/m/d");
    $id_keranjang = $data['id_keranjang'];
    $banyak =  $data['banyak_produk'];
    $bayar = $banyak * $data['harga_produk'];
    $in = mysqli_query($conn,"insert into pesanan values('','$id_keranjang','admin',
    '$banyak','$bayar','$date','0')");

}
header("location:order.php");
?>