<?php
  include('connect.php');
  session_start();
     if (!isset($_SESSION['nama'])) {
    header("location:5.1.1.login.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
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
   <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="shape.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
  
    <?php
  include("style.php");
  ?>

font{
  color: #f7ca18 /*color font*/
}
  </style>
}


</head>
<body id="order" data-spy="scroll" data-target=".navbar" data-offset="50">
<?php include("header.php");
?>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Order</p></center>
</div>

<div class="container text-center" style=" width: 100%;" >
  <h1>Silahkan Order</h1>
  <h5>Pilih Waktu pemesanan untuk Check Availability Meja</h5>
  <div class="row text-center" style="float: left; width: 20%; background-color: #9C6000;">
    <div class="col-sm-3" style="align-content: center;">
    <form method="get">
      <font>TANGGAL</font>
      <input type="text" value="<?php  date_default_timezone_set('Asia/Jakarta'); echo date("d F Y");?>" disabled >
      <input type="hidden" name="tanggal" value="<?php date_default_timezone_set('Asia/Jakarta');  echo date("Y-m-d");?>">
      <center><font>Jam</font></center>
              <select name="jam" required>
          <option></option>
          <option values="18:00">18:00</option>
          <option values="18:30">18:30</option>
          <option values="19:00">19:00</option>
          <option values="19:30">19:30</option>
          <option values="20:00">20:00</option>
          <option values="20:30">20:30</option>
          <option values="21:00">21:00</option>
          <option values="21:30">21:30</option>
          <option values="22:00">22:00</option>
          <option values="22:30">22:30</option>
          <option values="23:00">23:00</option>
          <option values="23:30">23:30</option>
          <option values="00:00">00:00</option>
        </select>
        <input type="submit" class="btn" name="submit" value="Check Availability" >
      </form>
        <font>Kapasitas Meja</font></center>
        <center><div class="triangle-up" style="color:  #f7ca18;"></div></center>
        <center><font>2 orang</font></center>
        <center><div class="square" style="background-color:  #f7ca18;" ></div></center>
        <center><font>4 orang</font></center>
        <center><div class="circle" style="background-color:  #f7ca18;"></div></center>
        <center><font>6 orang</font<></center>
        <center><div class="diamond" style="background-color:  #f7ca18;"></div></center>
        <center><font> 10 orang</font></center>
     </div>
    </div>

    <?php
          if(isset($_GET['submit'])){
          $tgl = $_GET['tanggal'];
          $jam = $_GET['jam'];
      
        $sql1 = mysqli_query($connection,"SELECT * FROM pemesanan NATURAL RIGHT JOIN meja WHERE waktu_pemesanan='$jam' AND idtransaksi is null ");

          
        
      ?>
<div class="main" style="float: right; width: 79% ; height: 700px; overflow: auto;" >
    <div class="row" >

      <?php

        while ($datameja = mysqli_fetch_array($sql1)) {

    

      ?>

    <div class="col-sm-4" style="border-style: solid ; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $datameja['gambarmeja']?>"  style="width: 500px; height: 300px;">
            <button type="button" class="btn" data-toggle="modal" data-target="#modalPilih<?php echo $datameja['nomeja']?>">  <?php echo $datameja['nomeja']?></button>
          </div>
        </div>
          <?php 
        include("pilihmeja.php");
      }
     }
 if (isset($_POST['buttoninsert'])) {
          $tanggal = $_POST['tanggal1'];
          $nama    = $_POST['nama1'];
          $nomeja = $_POST['nomeja1'];
          $jam    = $_POST['jam1'];
          
         session_start();
          $_SESSION['tanggal']    =  $tanggal;
          $_SESSION['nama_user']  =  $nama;
          $_SESSION['nomeja']     =  $nomeja;
          $_SESSION['jam']        =  $jam;
          
          

            echo "<meta http-equiv='refresh' content='0;url=2.menu.php'> ";
      }
    ?>            
     </div>
  </div>
</div>
</body>
</html>
