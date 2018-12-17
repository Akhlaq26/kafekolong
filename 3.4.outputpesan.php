<?php
    session_start();
    include("connect.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cafe Kolong</title>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  <?php
  include("style.php");
?>
</style>
</head>
<body id="order" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include("header.php");
?>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Order</p></center>
</div>

  <div class="container">
  	<h1>Checkout Pemesanan:</h1>
  	<p>&ensp;Terimakasih atas pemesanan anda,Selanjutnya harap untuk segera melakukan pembayaran sebelum waktu  yang ditentukan ke rekening kami.</p>
    <p>Nama&ensp;&ensp;:&ensp;Cafe Kolong</p>
    <p>No.Rek&ensp;&ensp;:&ensp;3821784821xxx</p>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
    </div>
  </div>
<div class="container">
  <form method="post" enctype="multipart/form-data">
    Kirim bukti pembayaran : 
    <input type="file" name="gambar"/>
    <input class="btn" type="submit" value="Upload" name="submit"/>


    <?php
        if (isset($_POST['submit']))      {
                $nama_user = $_SESSION['nama_user'];
                $total_pembelian = $_SESSION['totalbelanja'];
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
                  $gambarmenu = $perproduk['gambar'];
                  $connection->query("INSERT INTO pembelian_produk (id_pembelian,idmenu,nama,harga,subharga,jumlah,gambar) VALUES ('$id_pembelian_baru','$idmenu','$nama','$harga','$subharga','$jumlah','$gambarmenu')");
                  
                  

                  //mengkosongkan keranjang
                  unset($_SESSION['keranjang']);

                  //menambah tabel konfirmasi
                  $norekening  = $_SESSION['norekening'];
                  $namarekening= $_SESSION['namarekening'];
                  $namafile = $_FILES['gambar']['name'];

                  $error=$_FILES['gambar']['error'];
                  $source = $_FILES['gambar']['tmp_name'];
                  $folder='./image/struk/';
                  move_uploaded_file($source, $folder.$namafile);

                  if ($error===4) {
                    echo "<script> alert ('pilih gambar dahulu!');
                    </script>";
                    return false; 
                  }
                  //cek apakah yang diupload adalah gambar
                  $ekstensigambarvalid=['jpg','jpeg','png'];
                  $ekstensigambar=explode('.', $namafile);
                  $ekstensigambar=strtolower(end($ekstensigambar));
                  if(!in_array($ekstensigambar, $ekstensigambarvalid)){
                    echo "<script> alert ('yang anda upload bukan gambar!');
                    </script>";
                    return false; 
                  } 

                  $querykonfirmasi = "INSERT INTO konfirmasi (id_pembelian, norekening, namarekening, struk_pembayaran)
                  VALUES ('$id_pembelian_baru','$norekening', '$namarekening','$namafile');";
                  mysqli_query($connection, $querykonfirmasi);

                      unset($_SESSION['norekening']);
                      unset($_SESSION['namarekening']);

                  //  tampilan dirubah ke halaman nota,     
                  echo "<script>alert('beli sukses');</script>";
                  echo "<script>location='nota.php?id=$id_pembelian_baru';</script>";
                  }
        }
    ?>
  </form>
  </div>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    
  </a><br><br>
  <p>@Copyright</p> 
</footer>
<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

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