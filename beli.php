<?php
session_start();

//mendapatkan idmenu dari url
$idmenu = $_GET['id'];

//menambahkan jumlah produk yang sama
if (isset($_SESSION['keranjang'][$idmenu])) 
{
	$_SESSION['keranjang'][$idmenu]+=1;
}
//jika produk belum terpilih
else
{
	$_SESSION['keranjang'][$idmenu]=1;
}

echo "<script>alert('item telah ditambahkan');</script>";
echo "<script>location='2.menu.php';</script>";

?>