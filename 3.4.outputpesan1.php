<!DOCTYPE html>
<html>
<?php
$tiomeout = 1 ; // lama data yang tersimpan di database dan akan otomatis terhapus setelah 1 hari

// proses untuk melakukan penghapusan data

$query = "DELETE FROM transaksi
          WHERE DATEDIFF(CURDATE(), tanggal) > $tiomeout";
$hasil = mysqli_query($conn,$query);
?>
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
</head>
<body id="order" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="kk.png" alt="Chicago" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-top: 25px">
        <li><a href="#home">HOME</a></li>
        <li><a href="#menu">MENU</a></li>
        <li><a href="#order">ORDER</a></li>
        <li><a href="#event">EVENT</a></li>
        <li><a href="#profile">PROFILE</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

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
 <center><font size="18"><b id="demo"></b></center></font> 
<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 5, 2019 00:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now and the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds

    var minutes = Math.floor((distance % (900 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
<div class="container">
  <form method="post" enctype="multipart/form-data">
    Kirim bukti pembayaran : 
    <input type="file" name="namafile"/>
    <input type="submit" value="Upload" name="submit"/>
  <!--
  <?php
    if (isset($_POST["submit"])) {
      echo "Nama File :". $_FILES['namafile'] ['name']. "<br/>";
      echo "Tipe File :". $_FILES['namafile'] ['type']. "<br/>";
      echo "Size File : ". $_FILES['namafile'] ['size']. "<br/>";
      echo " Temporary Stored in: ". $_FILES['namafile'] ['tmp_name']. "<br/>";
      move_uploaded_file($_FILES['namafile']['tmp_name'], $_FILES['namafile']['name']);
    }
  ?> -->
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