<?php
session_start();
include 'connect.php'; 
//proteksi checkout bila belum login
if (!isset($_SESSION["nama"])) 
{
	echo "<script>alert('silahkan login terlebih dahulu');</script>";
	echo "<script>location='5.1.1.login.php';</script>";
					
}
?>
<?php
if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) 
{
	
		echo "<script>alert('Keranjang kosong, mohon Pesan terlebih dahulu! :)');</script>";
		echo "<script>location='2.menu.php';</script>";
}
?>
<?php
if (!isset($_SESSION["tanggal"])) 
{
	
		echo "<script>alert('Mohon Pesan Meja terlebih dahulu! :)');</script>";
		echo "<script>location='3.1.order.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
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
		<h1>Keranjang Belanja</h1>
		<hr>
		<div class="row">
	<div class="col-md-4">
		<form method="post">
		<h3>Pemesanan</h3>
		<p>Tanggal	: <strong> <?php echo $_SESSION['tanggal']?></strong><br>
		Nama		: <strong> <?php echo $_SESSION['nama_user']?></strong><br>
		No. Meja	: <strong> <?php echo $_SESSION['nomeja'] ?></strong><br>
		Waktu		: <strong> <?php echo $_SESSION['jam']?></strong></p>
		<button class="btn" style="width: 200px" name="btnBatal">Ubah Pemesanan</button>
		</form>
	</div>
	<?php
		if (isset($_POST['btnBatal'])) {
			unset($_SESSION["tanggal"]);
			unset($_SESSION['nama_user']);
			unset($_SESSION['nomeja']);
			unset($_SESSION['jam']);

			echo "<script>location='3.1.order.php';</script>";
		}
	?>
	</div>
		<table class="table table-hover">
			<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Subharga</th>
			</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $totalbelanja = 0; ?>
				<?php foreach ($_SESSION['keranjang'] as $idmenu => $jumlah): ?>

		<!--menampilkan produk-->
		<?php
		$ambil = $connection->query("SELECT * FROM menu WHERE idmenu='$idmenu'");
		$pecah = $ambil ->fetch_assoc();
		$subharga = $pecah["harga"]*$jumlah;  
		?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah ["nama"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga) ?></td>
				</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp.<?php echo number_format($totalbelanja) ?> </th>
				</tr>
			</tfoot>
		</table>
		<form method="post">
					<button class="btn btn-primary" name="checkout">Checkout</button>
		</form>

		<?php 
			if (isset($_POST["checkout"]))
			{
				$nama_user = $_SESSION["nama"];
				$total_pembelian = $totalbelanja;
				$nomeja1 = $_SESSION['nomeja'];
				$tanggal = $_SESSION['tanggal'];
				$jam1 = $_SESSION['jam'];
				//menyimpan data ke tabel pembelian
				$connection->query("INSERT INTO pembelian (nama_user,total_pembelian,nomeja,tanggal_pemesanan,waktu_pemesanan)
					VALUES ('$nama_user','$total_pembelian','$nomeja1','$tanggal','$jam1')
					");

				//id_pembelian baru 
				$id_pembelian_baru  = $connection ->insert_id;

				//menambah meja
				          $tanggal = $_SESSION['tanggal'];
				          $nama = $_SESSION['nama_user'];
				          $nomeja1 = $_SESSION['nomeja'];
				          $jam1 = $_SESSION['jam'];
          

           		  $queryinsert = "INSERT INTO pemesanan (tanggal_pemesanan, email, waktu_pemesanan, nomeja)
                  Values ('$tanggal','$nama', '$jam1', $nomeja1);";    
                  mysqli_query($connection, $queryinsert);

				foreach ($_SESSION["keranjang"] as $idmenu => $jumlah) 
				{

					//mendapatkan data produk berdasarkan idmenu
					$ambil = $connection->query("SELECT * FROM menu WHERE idmenu='$idmenu'");
					$perproduk = $ambil->fetch_assoc();

					$nama = $perproduk['nama'];
					$harga = $perproduk['harga'];
					$subharga = $perproduk['harga']*$jumlah;
					$connection->query("INSERT INTO pembelian_produk (id_pembelian,idmenu,nama,harga,subharga,jumlah) VALUES ('$id_pembelian_baru','$idmenu','$nama','$harga','$subharga','$jumlah') ");

					
					//mengkosongkan keranjang
					unset($_SESSION["keranjang"]);
					$_SESSION['id_pembelian'] = $id_pembelian_baru;

					//	tampilan dirubah ke halaman nota, 		
					echo "<script>alert('beli sukses');</script>";
					echo "<script>location='nota.php?id=$id_pembelian_baru';</script>";
				}
			}
		?>
	</div>
</section>
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