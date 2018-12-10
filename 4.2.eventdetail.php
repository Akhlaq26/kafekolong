<?php
  include('connect.php');
 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cafe Kolong</title>
	<!-- Theme Made By www.w3schools.com - No Copyright -->
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

</head>
<style type="text/css">
  <?php
  include("style.php");
?>
</style>
<body id="event" data-spy="scroll" data-target=".navbar" data-offset="50">
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


<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Event</p></center>
</div>
<?php
  $queryselect = "SELECT * FROM event ORDER BY idevent DESC limit 3";
  $resultselect = mysqli_query($connection, $queryselect);
 
  ?>

	<div class="container">
		<center>
		<button class="btn" data-toggle="modal" data-target="#myModal">Up Coming Event</button>
		&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
		<button class="btn" data-toggle="modal" data-target="#myModal">All Event</button>
		</center>
	<br>
	<br>
		<center>
			Bulan :
			<select name="Bulan"  style="padding: 12px 24px">
				<option value="January">Januari</option>
				<option value="February">Pebruari</option>
				<option value="March">Maret</option>
				<option value="April">April</option>
				<option value="May">Mei</option>
				<option value="June">Juni</option>
				<option value="Jully">Juli</option>
				<option value="August">Agustus</option>
				<option value="September">September</option>
				<option value="October">Oktober</option>
				<option value="November">Nopember</option>
				<option value="December">Desember</option>
			</select>
			&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
			Tahun :
			<select name="operator" style="padding: 12px 24px">
				<option value=2013>2013</option>
				<option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
			</select>
			
      
				<button class="btn" data-toggle="modal" data-target="#myModal" style="padding:9px 24px">Ok</button>
		</center>
		<div class="container">
			<input type="text" id="fname" name="name">
			<a href="#"><span class="glyphicon glyphicon-search"></span></a>
		</div>
    <?php
        while ( $row = mysqli_fetch_array($resultselect)) {
      ?>
		   <div class="col-sm-4">
            <div class="thumbnail">
                <img src="image/<?php echo $row['gambar'];?>" style="width: 500px; height: 300px;">
                <p><strong><center><?php echo $row['namaevent'];?></center></strong></p>
                <p><center><?php echo $row['tanggal'];?></center></p>
               <button class="btn btn-success" data-toggle="modal" data-target="#modalevent<?php echo $row['idevent'];?>" style="color: black">detail</button>
              </div>
          </div>
         <?php 
  include("4.3.modalevent.php");
     }
             
      ?>
    </div>

	<br>
	<br>
	<br>
			<footer class="text-center">
  				<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    			</a><br><br>
  				<p>@Copyright</p> 
			</footer>
</body>
</html>