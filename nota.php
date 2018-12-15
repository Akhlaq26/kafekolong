<?php	
include 'connect.php';
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nota Pembelian</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/js-3.2.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php include("header.php");
?>
<div class="container">
<section class="konten">
	<div class="container">
		
		<!-- copas pada detail.php admin -->
<h2> Detail Pembelian </h2>
<?php 
$ambil = $connection->query("SELECT * FROM pembelian JOIN user on pembelian.nama_user=user.nama_user WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<div class="row">
	<div class="col-md-4">
		<h3>PEMBELIAN</h3>
		<strong>No. Pembelian : <?php echo $detail['id_pembelian']?></strong><br>
		Tanggal : <?php echo $detail['tanggal_pembelian'];?><br>
		Total : Rp. <?php echo number_format($detail['total_pembelian']) ?>
	</div>
	<div class="col-md-4">
		<h3>PELANGGAN</h3>
		<strong><?php echo $detail['nama_user']; ?></strong> <br>
		<p>
			<?php echo $detail['telp']; ?> <br>
	 		<?php echo $detail['email']; ?>
		</p>
	</div>
	<div class="col-md-4">
		<h3>Pemesanan</h3>
		<p>Tanggal	: <strong> <?php echo $_SESSION['tanggal']?></strong><br>
		No. Meja	: <strong> <?php echo $_SESSION['nomeja'] ?></strong><br>
		Waktu		: <strong> <?php echo $_SESSION['jam']?></strong></p>
	</div>
</div>

<table class="table table-bordered">
	<thead>
	<tr>
		<th>No</th>
		<th>Nama Produk</th>
		<th>Harga</th>
		<th>Jumlah</th>
		<th>Subtotal</th>
	</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$connection->query("SELECT * FROM pembelian_produk WHERE id_pembelian='$_GET[id]'"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama'];?></td>
			<td><?php echo $pecah['harga'];?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td><?php echo $pecah['subharga'];?></td>
		</tr>
		<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
	</div>
</section>
<a href="3.3.Pembayaran.php"><button class="btn">Lanjut Pembayaran</button></a>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#home" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>@Copyright</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#home']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>
</body>
</html>