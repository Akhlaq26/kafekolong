<?php
    session_start();
?>

      <?php
        
        if (isset($_POST['selanjutnya'])) {
          $norekening = $_POST['norekening'];
          $namarekening = $_POST['namarekening'];

          $_SESSION['norekening']    =  $norekening;
          $_SESSION['namarekening']  =  $namarekening;

            echo "<meta http-equiv='refresh' content='0;url=3.4.outputpesan.php'> ";

      
    }
    ?>
<!DOCTYPE>
<html>
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
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container-pay {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container-pay {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

</head>
<body id="order" data-spy="scroll" data-target=".navbar" data-offset="50">
<?php
  include("header.php");
?>

<div class="parallax">
  <center><p style="font-family:  Freestyle Script; font-size: 70px; padding-top: 200px; color:white;">Order</p></center>
</div>

<div class="container-pay">

<h2>Pembayaran</h2>
<p>Silahkan lakukan pembayaran dengan mengisi form berikut ini:</p>
</div>

<div class="row">
  <div class="col-75">
    <div class="container-pay">
      <form method="post">
        <div class="row">
          <div class="col-50">
            <label for="fname">Pilih Salah Satu:</label>
            <div class="icon-container-pay">
              <input type="checkbox" name="sameadr"><img src="bri.png" style="width: 40px; height: 23px">
              <input type="checkbox" name="sameadr"><img src="bni.png" style="width: 40px; height: 23px">
              <input type="checkbox" name="sameadr"><img src="mandiri.png" style="width: 40px; height: 23px">
              <input type="checkbox" name="sameadr"><img src="danamon.jpg" style="width: 40px; height: 23px">
            </div>
            <label for="ccnum">Nomor Rekening:</label>
            <input type="number" id="ccnum" name="norekening" placeholder="xxxx-xx-xxxxxx-xx-x" required>
            <label for="cname">Nama Pada Rekening</label>
            <input type="text" id="cname" name="namarekening" placeholder="Nama  Lengkap" required>
          </div>       
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr" >Setuju
        </label>
        <input type="submit" name="selanjutnya" value="Selanjutnya" class="btn">
      </form>
    </div>
  </div>
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