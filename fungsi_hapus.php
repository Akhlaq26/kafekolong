<?php
session_start();
$idmenu=$_GET["id"];
if ($_SESSION["keranjang"][$idmenu]>1) {
	$_SESSION["keranjang"][$idmenu]-=1;

}
else{
	unset($_SESSION["keranjang"][$idmenu]);
}

echo "<script>alert('produk telah terhapus');</script>";
echo "<script>location='2.menu.php';</script>";
					
?>