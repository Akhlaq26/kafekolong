<?php
// koneksi
	include("connect.php");

// proses untuk melakukan penghapusan data

$query = "DELETE FROM pemesanan
          WHERE DATEDIFF(CURDATE(), tanggal_pemesanan)";
$hasil = mysqli_query($connection,$query);
?>
