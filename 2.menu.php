<?php
  include("connect.php");
?>
<?php 
session_start()


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body {
    font-family: "Lato", sans-serif;
}
.navbar-menu {
    overflow: hidden;
    background-color: #9C6000;
    font-family: Arial, Helvetica, sans-serif;
    width: 260px;
}

.navbar-menu a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.dropdown-makanan {
    float: left;
    overflow: hidden;
}

.dropdown-makanan .dropbtn-makanan {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    color: #f7ca18;
}

.navbar-menu a:hover, .dropdown-makanan:hover .dropbtn-makanan {
    background-color: #f7ca18;
    color: black;
}

.dropdown-content-makanan {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}



.dropdown-content-makanan a:hover {
    background-color: #ddd;
    display: block;
    text-decoration: none;
}

.dropdown-makanan:hover .dropdown-content-makanan {
    display: block;
}

/*button notification*/
.notification {
  background-color: #9C6000 ;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;


  }

.notification:hover {
  background: #f7ca18;
  text-decoration: none;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}

/* Style the tab */
.tab {
    overflow: hidden;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
   float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
    background-color: white;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;

}

}
</style>
  <title>Cafe Kolong</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
     <link rel="stylesheet" type="text/css" href="style.css">
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
<body id="menu" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include("header.php");
?>


<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Menu</p></center>
</div>

<!-- Container (Best Product) -->
<div class="bg-1">
  <div class="container" style="background-color: white;" >

    <!-- Side navigation -->
<div class="navbar-menu">
  <div class="dropdown-makanan">
    <button class="dropbtn-makanan">Food 
      <i class="fa fa-caret-down"></i>
    </button>

    <div class="dropdown-content-makanan">
<div class="tab">
  <form method="post">
  <button name="FastFood" type="btn">FastFood</button>
  <button name="Snack" type="btn">Snack</button>
</div>
    </div>
  </div>
  <div class="dropdown-makanan">
    <button class="dropbtn-makanan">Drink
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content-makanan">
  <div class="tab">
  <button  name="KopiTubrukBiasa" >Kopi Tubruk Biasa</button>
  <button name="KopiTubrukLuarBiasa">Kopi Tubruk Luar Biasa</button>
  <button name="KopiPanas">Kopi Panas</button>
  <button name="KopiDingin" >Kopi Dingin</button>
  <button name="SusuTenan">Susu Tenan</button>
  <button name="SusuKocok">Susu Kocok</button>
  <button name="JusSusu" >Jus Susu</button>
  <button name="JusBuah">Jus Buah</button>
  <button name="Teh">Teh</button>
  <button name="MinumanPanas">Minuman Panas</button>
  <button name="MinumanDingin">Minuman Dingin</button>
  </div>
    </div>
  </div>
    <div class="dropdown-makanan">
    <button class="dropbtn-makanan" name="allmenu">All Menu
    </button>
    </form>
  </div>
</div>
<font>Klik Kategori menu yang akan pesan!</font>

<div class="container-button" style="float: right; width: 160px">
   <button class="btn" data-toggle="modal" data-target="#modalKeranjang">
  <span>Keranjang</span>
        <?php if(!isset($_SESSION['keranjang'])){?>
           <span class="badge">0</span>      
       <?php }else{
          $totalbelanja = 0;
                  foreach ($_SESSION['keranjang'] as $idmenu => $jumlah):
                        
              $ambil = $connection->query("SELECT * FROM menu WHERE idmenu='$idmenu'");
              $pecah = $ambil ->fetch_assoc();
              $subharga = $pecah["harga"]*$jumlah;  
              
                   $totalbelanja+=$subharga; 
                   endforeach
                   ?>
         <span class="badge">Rp.<?php echo number_format($totalbelanja) ?></span>
       <?php }?>
  </button>
</div>
<?php
  include("keranjang.php");
?>
<!-- Page content -->
<div class="main">

    <div class="row text-center" style="overflow: auto; height: 500px; ">
          <?php
  if (isset($_POST['allmenu'])) {
  $queryselect = "SELECT * FROM menu";
  $resultselect = mysqli_query($connection, $queryselect);
?>
 <?php while ($row = mysqli_fetch_array($resultselect)){
  ?>
       <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
    <?php
    }
  }
      ?>

         <?php
  if (isset($_POST['FastFood'])) {
  $queryselect = "SELECT *FROM menu where categori='FastFood'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['Snack'])) {
  $queryselect = "SELECT *FROM menu where categori='Snack'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
           <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>

         <?php
  if (isset($_POST['KopiTubrukBiasa'])) {
  $queryselect = "SELECT *FROM menu where categori='Kopi Tubruk Biasa'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['KopiTubrukLuarBiasa'])) {
  $queryselect = "SELECT *FROM menu where categori='Kopi Tubruk Luar Biasa'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>

               <?php
  if (isset($_POST['KopiPanas'])) {
  $queryselect = "SELECT *FROM menu where categori='Kopi Panas'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['KopiDingin'])) {
  $queryselect = "SELECT *FROM menu where categori='Kopi Dingin'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
           <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>

         <?php
  if (isset($_POST['SusuTenan'])) {
  $queryselect = "SELECT *FROM menu where categori='Susu Tenan'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['SusuKocok'])) {
  $queryselect = "SELECT *FROM menu where categori='Susu Kocok'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
               <?php
  if (isset($_POST['JusSusu'])) {
  $queryselect = "SELECT *FROM menu where categori='Jus Susu'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['JusBuah'])) {
  $queryselect = "SELECT *FROM menu where categori='Jus Buah'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
           <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>

         <?php
  if (isset($_POST['Teh'])) {
  $queryselect = "SELECT *FROM menu where categori='Teh'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
      
         <?php
  if (isset($_POST['MinumanPanas'])) {
  $queryselect = "SELECT *FROM menu where categori='Minuman Panas'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>
        <?php
  if (isset($_POST['MinumanDingin'])) {
  $queryselect = "SELECT *FROM menu where categori='Minuman Dingin'";
  $resultselect = mysqli_query($connection, $queryselect);
?> 
  <?php  while ($row = mysqli_fetch_array($resultselect)){
    ?>
       <div class="col-sm-6 text-center" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p>Rp.<?php echo number_format($row['harga'])?></p>
            <a href="beli.php?id=<?php echo $row['idmenu']; ?>"><button class="btn" >Order</button></a>
          </div>
        </div>
       <?php
    }
  }
      ?>

  </div>
</div>
</div>
</div>


<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#menu" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>@Copyright</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#menu']").on('click', function(event) {

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