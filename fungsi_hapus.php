<?php
session_start();
$idmenu=$_GET["id"];
unset($_SESSION["keranjang"][$idmenu]);

echo "<script>alert('produk telah terhapus');</script>";
echo "<script>location='keranjang.php';</script>";
					
?>