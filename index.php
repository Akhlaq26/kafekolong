<?php
  include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    <?php
    include("style.php");
    ?>
  </style>
</head>
<body id="home" data-spy="scroll" data-target="navbar" data-offset="50">
<?php include("header2.php");
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="image/no.jpg" style="width: 1400px; height: 700px;">
        <div class="carousel-caption">
          <h1 style="font-family:  Freestyle Script; font-size: 70px">CAFE KOLONG</h1>
          <p>Cafe yang berada di kolong jembatan. </p>
        </div>      
      </div>

      <div class="item">
        <img src="image/nn.jpg" style="width: 1400px; height: 700px;">
        <div class="carousel-caption">
          <h1 style= "font-family:  Freestyle Script; font-size: 70px">CAFE KOLONG</h1>
          <p>Tempat untuk mencari inspirasi dan relaksasi pikiran.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="image/nb.jpg" style="width: 1400px; height: 700px;">
        <div class="carousel-caption">
          <h1 style="font-family:  Freestyle Script; font-size: 70px">CAFE KOLONG</h1>
          <p>Tempat wisata masyarakat dan cocok untuk generasi milllenials pecinta kopi.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">Best Product</h3>
    <p class="text-center">Berikut ini adalah list produk terbaik dari kami.<br> Pesan dan rasakan kenikmatannya :)</p>
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/cor.jpg" style="width: 500px; height: 300px;">
          <p><strong>Wedhang Cor</strong></p>
          <p>Perpaduan Antara jahe dan susu pilihan</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Order</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/jajang.jpg" style="width: 500px; height: 300px;">
          <p><strong>Mie Blenger</strong></p>
          <p>Kombinasi mie khas jepang dan sambal tradisional</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Order</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="image/roti.jpg" style="width: 500px; height: 300px;"">
          <p><strong>Roti Bakar Keju</strong></p>
          <p>Mix dari roti kulitas terbaik dengan keju dan cokelat</p>
          <button class="btn">Order</button>
        </div>
      </div>
    </div>
    <center><a href="2.menu.php"><button type="button" class="btn " >More Menu</button></a></center>
  </div>
  

<!-- Container (Contact Section) -->
<div id="contact" style="background: white" class="container">
  <h2 class="text-center">Contact</h2>
  <p class="text-center"><em>We love our fans!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Fan? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Jember,INA</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +628855568</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: cafekolong@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
  <br>
  <h3 class="text-center">From The Blog</h3>  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu0">Filosofi</a></li>
    <li><a data-toggle="tab" href="#menu1">Sejarah</a></li>
    <li><a data-toggle="tab" href="#menu2">Visi & Misi</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu0" class="tab-pane fade in active">
      <h2>Filosofi</h2>
      <p>Cafe Kolong ialah cafe yang kami ciptakan berdasarkan inspirasi fakta yang bahwasannya lingkungan dibawah kolong  jembatan  merupakan lingkungan yang berkonotasi kotor dan terkesan sebagai sampah masyrakat. Cafe kolong merupakan suatu  inspirasi bagi kami untuk membuka mata dan wawasan  masyarakat berupa edukasi destinasi wisata berupa  cafe yang didesain  unik agar masyarakat perlahan-lahan menghilangkan konotasi  buruk terhadap  kolong jembatan.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h2>Sejarah</h2>
     <p>&ensp;<b>Sejarah Berdirinya Kafe Kolong Jember</b> tidak terlepas dari ide beberapa pecinta kopi dari alumni Universitas Jember. Saat nongkrong bareng di warung sambil menyeruput kopi, sering kali membahas masalah kopi mulai dari rasa hingga asal kopi. Jika minum kopi sambil ngobrol lebih asyik maka perlu ditempat yang asyik pula.</p>
		<p>&ensp;Kebetulan, beberapa penikmat kopi tersebut merupakan aktivis pencinta alam Universitas Jember yang sering "bermain" di sungai Bedadung di Jember dan melihat ada lokasi yang unik di pinggir sungai tersebut yaitu di bawah kolong jembatan Mastrip yang tidak jauh dari kampus Universitas Jember. Maka muncullah ide untuk membuat tempat ngobrol sambil minum kopi yang unik berbeda dengan yang sudah, pada kolong jembatan tersebut.</p>
		<p>&ensp;Hanya saja, kondisi kolong jembatan sungai Bedadung di Mastrip sangat kotor serta terkadang dibuat tempat "penyakit masyarakat" sehingga memiliki konotasi negatif. Akan tetapi, kolong jembatan memiliki kondisi yang unik seperti terowongan, maka kemauan untuk menyulap tempat tersebut semakin kuat.</p>
		<p>&ensp;Langkah pertama adalah meyakinkan masyarakat sekitar terutama tokoh masyarakat untuk mengubah kesan negatif terhadap kondisi bawah jembatan menjadi sesuatu yang bermanfaat bagi masyarakat. Setelah masyarakat sekitar jembatan merestui, maka pada tahun 2013 mulailah sudut-sudut kolong jembatan yang masih kosong, dibersihkan.</p>
		<p>&ensp;Meskipun memiliki keterbatasan dana, rencana untuk mendirikan tempat nongkrong para pecinta kopi terus berjalan. Dibuatlah warung dengan konsep modern dengan dipercantik lampu-lampu ala Cafe Eropa serta memberi sentuhan alam dengan menempatkan tempat duduk dari bambu di tiap sudutnya agar berkesan menyatu dengan alam. Tampil konvensional, sederhana, namun tetap menarik dan asyik untuk hangout.</p>
		<p>&ensp;&ensp;&ensp;&ensp;&ensp;<font size="5"><b><u>Karena berada di kolong jembatan maka warung kopi ini dinamakan Kafe Kolong.</b></u></b></font></p>
		<p>&ensp;Hadirnya kafe kolong sebagai tempat penikmat kopi bercengkerama, membuat banyak kalangan terutama mahasiswa yang tinggal di sekitar lokasi kafe mencoba bergabung untuk menikmati suasana ngopi di bawah jembatan yang unik. Cerita tentang ngopi di kafe yang unik di bawah jembatan ini semakin meluas sehingga menjadi promosi gratis sehingga banyak tamu yang datang dari berbagai kalangan untuk sejenak menikmati kopi sembari duduk-duduk bertukar cerita di kafe kolong.</p>
		<p>&ensp;Selain memfasilitasi para pecinta kopi, Kafe Kolong juga menyediakan beraneka minuman ringan lainnya bagi tamu yang kurang menyukai kopi dan operasional kafe buka pada jam-jam tertentu saja yaitu saat matahari mulai tidur hingga dini hari untuk menemani pengunjung menikmati secangkir kopi dengan ciri khasnya masing-masing.</p>
		<p>&ensp;Masyarakat sekitar jembatan akhirnya senang karena lingkungannya menjadi bersih dan indah serta dilibatkan dalam operasional kafe untuk parkir, keamanan dan kebersihan. Bahkan Kafe Kolong dijadikan salah satu destinasi wisata kota Jember.
    </div>
    <div id="menu2" class="tab-pane fade">
      <h2>Visi dan Misi</h2>
	<p><font size="9">Visi:</font>
			<ol>1.Menjadikan wisata hal baru untuk masyarakat.</ol>
			<ol>2.Menghilangkan konotasi negatif terhadap jembatan.</ol>
			<ol>3.Meningkatkan lapangan pekerjaan.</ol>
		</p>
		<p><font size="9">Misi:</font>
			<ol>1.Menjadikan tempat wisata utama  untuk kalangan milenial</ol>
			<ol>2.Mengembangkan hal-hal baru berupa desain wisata yang unik untuk para  pengunjung.</ol>
			<ol>3.Menjadikan wisata cafe yang paling ssering dikunjunngi oleh masyarakat Jember.</ol>
		</p>
    </div>
  </div>
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
