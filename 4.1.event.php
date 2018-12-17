<?php
  include('connect.php');
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cafe Kolong</title>
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
</head>
<style type="text/css">
  <?php
  include("style.php");
?>
</style>
<body id="event" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php 
    include("header.php");
?>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Event</p></center>
</div>
<?php
  $queryselect = "SELECT * FROM event ORDER BY idevent DESC limit 3";
  $resultselect = mysqli_query($connection, $queryselect);
 
  ?>
	<div class="container">
    <button class="btn" data-toggle="modal" data-target="#myModal">Up Coming Event
		<center></button>
		<a href="4.2.eventdetail.php"><button class="btn">All Event</button></a>
		</center>
		<br>
		<br>
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
      		<footer class="text-center">
  				<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    			</a><br><br>
  				<p>@Copyright</p> 
			</footer>
	
</body>
</html>