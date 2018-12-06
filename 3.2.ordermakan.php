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

  </style>
  <style type="text/css">
  <?php
  include("style.php");
?>
</style>
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
   <link rel="stylesheet" type="text/css" href="style.css">
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
      <img src="image/kk.png" alt="Chicago" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-top: 25px">
        <li><a href="1.index.php">HOME</a></li>
        <li><a href="2.menu.php">MENU</a></li>
        <li><a href="3.1.order.php">ORDER</a></li>
        <li><a href="4.1.event.php">EVENT</a></li>
                        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>Profile<i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="5.1.1.login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
      </ul>
    </div>
  </div>
</nav>
      </ul>
    </div>
  </div>
</nav>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Order</p></center>
</div>

<!-- Container (Best Product) -->
<div class="bg-1">
  <div class="container">
    <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
          <div class="navbar-menu">
  <div class="dropdown-makanan">
    <button class="dropbtn-makanan">Food 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content-makanan">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'FastFood')" id="defaultOpen">FastFood</button>
  <button class="tablinks" onclick="openCity(event, 'Dessert')">Dessert</button>
  <button class="tablinks" onclick="openCity(event, 'Meal')">Meal</button>
</div>
    </div>
  </div>
  <div class="dropdown-makanan">
    <button class="dropbtn-makanan">Drink
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content-makanan">
  <div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Milk')" id="defaultOpen">Milk</button>
  <button class="tablinks" onclick="openCity(event, 'Coffee')">Coffee</button>
  <button class="tablinks" onclick="openCity(event, 'Juice')">Juice</button>
  </div>
    </div>
  </div>

</div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-3 ">
      <div class="well">
        <center><p>Tanggal</p></center>
        <center><input type="text" name="bday" value="21/11/2018" disabled></center>
        <br></br>
        <center><p>Jam</p></center>
        <center><input type="text" name="usr_time" value="18:00" disabled></center>
        <br></br>
        <center><p>No Meja</p></center>
        <center><input type="text" name="meja" value="8" disabled></center>
        <br>
        <center><button>Batal</button></center>
     </div>
    </div>
    <div class="col-sm-9">
      <div class="well">
      <div class="main">
    
    <div class="row text-center" style="overflow: auto; height: 500px; ">
      <div id="FastFood" class="tabcontent">
        <div class="col-sm-4" >
          <div class="thumbnail">
            <img src="image/cor.jpg" style="width: 500px; height: 300px;">
            <p><strong>Wedhang Cor</strong></p>
            <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <a href="3.3.Pembayaran.php"><button class="btn" >Order</button>
          </div>
        </div>
      
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="image/jajang.jpg" style="width: 500px; height: 300px;">
            <p><strong>Mie Blenger</strong></p>
            <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
      </div>

      <div id="Dessert" class="tabcontent">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="image/roti.jpg" style="width: 500px; height: 300px;">
            <p><strong>Roti Bakar Keju</strong></p>
            <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="image/kentang.jpg" style="width: 500px; height: 300px;">
            <p><strong>Kentang Goreng</strong></p>
           <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="image/sosis.jpg" style="width: 500px; height: 300px;">
            <p><strong>Sosis Bakar</strong></p>
            <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
    </div>
    <div id="Meal" class="tabcontent">
        <div class="col-sm-4">
          <div class="thumbnail">
            <img src="image/nugget.jpg" style="width: 500px; height: 300px;">
            <p><strong>Nugget Pisang</strong></p>
            <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="image/pempek.jpg" style="width: 500px; height: 300px;">
              <p><strong>Pempek Kapal Selam Torpedo</strong></p>
              <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
          </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="image/pentol.jpg" style="width: 500px; height: 300px;">
                <p><strong>Pentol Bakar</strong></p>
                <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
          </div>
        </div>
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="image/usus.jpg" style="width: 1000px; height: 300px;">
                <p><strong>Usus Bakar</strong></p>
                <p>Rp.100.000</p>
            Quantity<input type="text"name="jml" style="width: 30px">
            <br></br>
            <button class="btn" >Order</button>
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

    <!-- Side navigation -->


<!-- Page content -->

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
