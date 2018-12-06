<?
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
  <style type="text/css">
  <?php
  include("style.php");
?>
</style>
</head>
<body id="event" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php include("header.php");
?>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Event</p></center>
</div>

	<div class="container">
		<center>
		<button class="btn" data-toggle="modal" data-target="#myModal">Up Coming Event</button>
		<button class="btn" data-toggle="modal" data-target="#myModal">All Event</button>
		</center>
		<br>
		<br>
		    <div class="col-sm-4">
        		<div class="thumbnail">
          			<img src="image/182.jpg" style="width: 500px; height: 300px;">
          			<p><strong><center>Blink-182</center></strong></p>
          			<p><center>28 Januari 2018</center></p>
           		</div>
      		</div>
      		<div class="col-sm-4">
        		<div class="thumbnail">
          			<img src="image/simpleplan.jpg" style="width: 500px; height: 300px;">
          			<p><strong><center>Simple Plan</center></strong></p>
          			<p><center>17 Agustus 2018</center></p>
           		</div>
      		</div>
      		<div class="col-sm-4">
        		<div class="thumbnail">
          			<img src="image/blackpink.jpg" style="width: 500px; height: 300px;">
          			<p><strong><center>Black Pink</center></strong></p>
          			<p><center>27 Pebruari 2018</center></p>
           		</div>
      		</div>
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