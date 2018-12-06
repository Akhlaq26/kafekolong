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
<style type="text/css">
  <?php
  include("style.php");
?>
</style>
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
                        <i class="fa fa-user fa-fw"></i>Profie<i class="fa fa-caret-down"></i>
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

<div class="container-pay">

<h2>Pembayaran</h2>
<p>Silahkan lakukan pembayaran dengan mengisi form berikut ini:</p>
</div>
<div class="row">
  <div class="col-75">
    <div class="container-pay">
      <form action="3.4.outputpesan.php">
      
        <div class="row">
          <div class="col-50">

            <h3>Data Diri:</h3>
            <label for="fname"><i class="fa fa-user"></i> Nama</label>
            <input type="text" id="fname" name="name" placeholder="Nama Lengkap">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="alamat email">
            <label for="adr"><i class="fa fa-address-card-o"></i> Alamat rumah</label>
            <input type="text" id="adr" name="address" placeholder="JL.Khayangan Indah">
            <label for="city"><i class="fa fa-institution"></i> Kota</label>
            <input type="text" id="city" name="city" placeholder="Zimbabwe">

            <div class="row">
              <div class="col-50">
                <label for="state">Kota</label>
                <input type="text" id="state" name="state" placeholder="kota tempat tinggal anda">
              </div>
              <div class="col-50">
                <label for="kodepos">Kode pos</label>
                <input type="text" id="kodepos" name="kodepos" placeholder="681xxx">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Pembayaran :</h3>
            <label for="fname">Menerima :</label>
            <div class="icon-container-pay">
              <img src="image/bri.png" style="width: 40px; height: 23px">
              <img src="image/bni.png" style="width: 40px; height: 23px">
              <img src="image/mandiri.png" style="width: 40px; height: 23px">
              <img src="image/danamon.jpg" style="width: 40px; height: 23px">
            </div>
            <label for="cname">Nama pada kartu kredit</label>
            <input type="text" id="cname" name="cardname" placeholder="Nama  Lengkap">
            <label for="ccnum">Nomor kartu kredit</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Jumlah Produk</label>
                <input type="text" id="expyear" name="expyear" placeholder="Total Produk">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Setuju
        </label>
        <a href="3.4.outputpesan.php"></a><input type="submit" value="Selanjutnya" class="btn">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container-pay">
      <h4>List <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Sosis Bakar</a> <span class="price">Rp.20.000</span></p>
      <p><a href="#">Kentang Goreng</a> <span class="price">Rp.7.000</span></p>
      <p><a href="#">Roti Bakar</a> <span class="price">Rp.36.000</span></p>
      <hr>
      <p>SubTotal <span class="price" style="color:black"><b>Rp.200.000</b></span></p>
      <p>Taxes <span class="price" style="color:black"><b>Rp.2000</b></span></p>
      <p>Shiping <span class="price" style="color:black"><b>Rp.300</b></span></p>
      <p>Total <span class="price" style="color:black"><b>Rp.66.450</b></span></p>
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