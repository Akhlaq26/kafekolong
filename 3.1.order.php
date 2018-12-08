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
  <h5>Pilih Tanggal untuk Check Availability Meja</h5>
  <div class="row text-center" style="float: left; width: 20%; background-color: #9C6000;">
    <div class="col-sm-3" style="align-content: center;">
    <form method="get">
      <font>PILIH TANGGAL</font>
      <input type="date" name="tanggal">
      <input type="submit" class="btn" value="Check Availability" >
    </form>
      <center><font>Jam</font></center>
      <input type="time" name="waktu"></center>
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
          if(isset($_GET['tanggal'])){
        $tgl = $_GET['tanggal'];
        $sql = mysqli_query($connection,"select * from meja");
      
        $sql1 = mysqli_query($connection,"SELECT * FROM transaksi JOIN meja ON transaksi.nomeja=meja.nomeja ");
      $data = mysqli_fetch_array($sql1);

          
        
      ?>
<div class="main" style="float: right; width: 79% ; height: 700px; overflow: auto;" >
    <div class="row" >

      <?php
        while ($datameja = mysqli_fetch_array($sql)) {
      ?>

    <div class="col-sm-4" style="border-style: solid ; border-width: 2px; border-color: #b49a00;">
          <div class="thumbnail">
            <img src="image/<?php echo $datameja['gambarmeja']?>"  style="width: 500px; height: 300px;">
            <button type="button" class="btn" data-toggle="modal" data-target="#modalPilih<?php echo $datameja['nomeja']?>" <?php if ($data['tanggal'] == $tgl AND $data['nomeja'] == $datameja['nomeja']){ ?> disabled <?php   } ?>>  <?php echo $datameja['nomeja']?></button>
          </div>
        </div>
          <?php 
        include("pilihmeja.php");
      }
     }
 if (isset($_POST['buttoninsert'])) {
          $tanggal = $_POST['tanggal1'];
          $email = $_POST['email'];
          $nomeja1 = $_POST['nomeja1'];
          $waktu = $_POST['jam'];
          

           $queryinsert = "INSERT INTO transaksi (tanggal, email,  nomeja)
                  Values ('$tanggal','$email', $nomeja1);";        
          if (mysqli_query($connection, $queryinsert)){
            echo "<meta http-equiv='refresh' content='0;url=3.2.ordermakan.php'> ";
          }else{
            echo "anda gagal menambah data)";
          }
      }
    ?>            
     </div>
  </div>
</div>
</body>
</html>
