<?php
  include("connect.php");
?>
<?php 
  session_start();
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
    width: 138px;
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

<style type="text/css">
  <?php
  include("style.php");
?>
</style>

</head>
<body id="menu" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <img src="image/kk.png" alt="Chicago" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-top: 25px">
        <li><a href="index.php">HOME</a></li>
        <li><a href="2.menu.php">MENU</a></li>
        <li><a href="3.1.Order.php">ORDER</a></li>
        <li><a href="4.1.event.php">EVENT</a></li>
        <li><a href="5.1.1.login.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

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
  <button class="tablinks" onclick="openCity(event, 'Dessert')">Dessert</button>
  <button class="tablinks" onclick="openCity(event, 'Meal')">Meal</button>
  </form>
</div>
    </div>
  </div>
  <div class="dropdown-makanan">
    <button class="dropbtn-makanan">Drink
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content-makanan">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Milk')" >Milk</button>
  <button class="tablinks" onclick="openCity(event, 'Coffee')">Coffee</button>
  <button class="tablinks" onclick="openCity(event, 'Juice')">Juice</button>

  <?php   
   if(isset($_GE['buttoninsert'])){
  $query = "SELECT *FROM menu WHERE categori='FastFood';";
  $result = mysqli_query($connection, $query);    
}

  ?>
  </div>
    </div>
  </div>
</div>
<div class="container-button" style="float: right;">
    <a href="#" class="notification" >
  <span>Order</span>
  <span class="badge">3</span>
</a>
</div>

<!-- Page content -->
<div class="main" style="width: 1140px" >
    <?php
  if (isset($_POST['FastFood'])) {
  $queryselect = "SELECT *FROM menu where categori='FastFood'";
  $resultselect = mysqli_query($connection, $queryselect);
?>
    <div class="row text-center" style="overflow: auto; height: 1000px; ">
      <div id="FastFood" name="FastFood" >
 <?php while ($row = mysqli_fetch_array($resultselect)){
  ?>
       <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $row['gambar']?>"  style="width: 500px; height: 300px;">
            <p><strong> <?php echo $row['nama']?></strong></p>
            <p><?phpecho $row ['deskripsi']?></p>
            <p><?echo $row  ['categori']?></p>
            <button class="btn" >Order</button>
          </div>
        </div>
    <?php
    }
  }
      ?>
        <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/jajang.jpg" style="width: 500px; height: 300px;">
            <p><strong>Mie Blenger</strong></p>
            <p>Kombinasi mie khas jepang dan sambal tradisional</p>
            <button class="btn" >Order</button>
          </div>
        </div>
      </div>
      <div id="Dessert" class="tabcontent">
        <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/roti.jpg" style="width: 500px; height: 300px;">
            <p><strong>Roti Bakar Keju</strong></p>
            <p>Mix dari roti kulitas terbaik dengan keju dan cokelat</p>
            <button class="btn">Order</button>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumbnail" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
            <img src="image/kentang.jpg" style="width: 500px; height: 300px;">
            <p><strong>Kentang Goreng</strong></p>
            <p>Diambil dari kentang segar dan masih baru dipanen sehinngga kentang terasa beda rasanya apabila dinikmati.</p>
            <button class="btn">Order</button>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="thumbnail" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
            <img src="image/sosis.jpg" style="width: 500px; height: 300px;">
            <p><strong>Sosis Bakar</strong></p>
            <p>Perpaduan rasa dari kecap kental manis dengan madu aceh ditambah rempah-rempah pilihan</p> 
            <button class="btn">Order</button>
          </div>
        </div>
    </div>
    <div id="Meal" class="tabcontent">
        <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/nugget.jpg" style="width: 500px; height: 300px;">
            <p><strong>Nugget Pisang</strong></p>
            <p>Dibuat dari daging sapi pilihan ditambah pisang</p>
            <button class="btn">Order</button>
          </div>
        </div>
          <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
            <div class="thumbnail">
              <img src="image/pempek.jpg" style="width: 500px; height: 300px;">
              <p><strong>Pempek Kapal Selam Santan Torpedo</strong></p>
              <p>Dicampur dengan santan yang sangat kental </p>
            <button class="btn">Order</button>
          </div>
          </div>
          <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
            <div class="thumbnail">
              <img src="image/pentol.jpg" style="width: 500px; height: 300px;">
                <p><strong>Pentol Bakar</strong></p>
                <p>Pembuatan dengan cara dibakar </p>
              <button class="btn">Order</button>
            </div>
          </div>
          <div class="col-sm-6" style="border-style: dotted; border-width: 2px; border-color: #b49a00;">
            <div class="thumbnail">
              <img src="image/usus.jpg" style="width: 500px; height: 300px;">
                <p><strong>Usus Bakar</strong></p>
                <p>Mix dari roti kulitas terbaik dengan keju dan cokelat</p>
              <button class="btn">Order</button>
            </div>
          </div>
       </div> 
        <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>
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
