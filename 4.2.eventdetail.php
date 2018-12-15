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

<?php include("header.php") ?>


<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Event</p></center>
</div>


	<div class="bg-1">
    <div class="container" style="background-color: white">
		<div class="button-container">
    <center>
		<button class="btn" data-toggle="modal" data-target="#myModal">Up Coming Event</button>
    <form method="post">
		<button class="btn"  name="allevent">All Event</button>
    </form>
    </center>
    
  <form method="POST">
		<center>
			Bulan :
			<select name="bulan">
        <option value="01">Januari</option>
        <option value="02">Februari</option>
        <option value="03">Maret</option>
        <option value="04">April</option>
        <option value="05">Mei</option>
        <option value="06">Juni</option>
        <option value="07">Juli</option>
        <option value="08">Agustus</option>
        <option value="09">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
      </select>
<select name="tahun">
<?php
$mulai= date('Y') - 50;
for($i = $mulai;$i<$mulai + 100;$i++){
    $sel = $i == date('Y') ? ' selected="selected"' : '';
    echo '<option value="'.$i.'"'.$sel.'>'.$i.'</option>';
}
?>
</select>
<button class="btn" name="submit" style="width: 100px; height: 40px;">Cari</button>
</form>
</div>
<div class="event">
<?php
     if(isset($_POST['allevent'])){
  $event = "SELECT * FROM event";
  $eventselect = mysqli_query($connection, $event);
 
   
  ?>
  <?php
        while ( $taeco = mysqli_fetch_array($eventselect)) {
      ?>
       <div class="col-sm-4">
            <div class="thumbnail">
                <img src="image/<?php echo $taeco['gambar'];?>" style="width: 500px; height: 300px;">
                <p><strong><center><?php echo $taeco['namaevent'];?></center></strong></p>
                <p><center><?php echo $taeco['tanggal'];?></center></p>
               <button class="btn btn-success" data-toggle="modal" data-target="#modalevent<?php echo $taeco['idevent'];?>" style="color: black">detail</button>
              </div>
          </div>
         <?php 
    include("4.3.modalevent.php");
     }
   }
    ?>

    <?php
     if(isset($_POST['submit'])){
         $bulan = $_POST['bulan'];
          $tahun = $_POST['tahun'];
          $sql = "select * from event where month(tanggal)='$bulan' and year(tanggal) = '$tahun'";
          
         $resultselect = mysqli_query($connection, $sql);
 
      ?>

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
             }
      ?>
    </div>
</div>
</div>
			<footer class="text-center">
  				<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    			</a><br><br>
  				<p>@Copyright</p> 
			</footer>
</body>
</html>