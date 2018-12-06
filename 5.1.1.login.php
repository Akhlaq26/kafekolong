<?php
  include("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">

.parallax { 
    /* The image used */
    background-image: url("image/no.jpg");

    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("image/no.jpg");

    height: 700px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */
.container-login {
    align-content: center;
    margin: 20px auto;
    max-width: 400px;
    padding: 16px;
   background: rgba(0, 0, 0, 0.1); /* Black background with 0.5 */
    color: #f1f1f1;
    border-style: dotted;
    border-width: 2px;
    max-height: 100%;
}

/* Full-width input fields */
input[type=email], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=email]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btnlogin {
    background-color: #9C6000;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btnlogin:hover {
    opacity: 1;

}
      <?php
  include("style.php");
  ?>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body id="login" data-spy="scroll" data-target="navbar" data-offset="50">

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
        <li><a href="3.1.order.php">ORDER</a></li>
        <li><a href="4.1.event.php">EVENT</a></li>
        <li><a href="5.1.1.login.php">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="bg-img" style="padding-top: 50px; margin-top: 100px ">

  <form method="post" ="post" class="container-login">


    <center><h1>Login</h1></center>
    <hr>
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" style="color: black" required>
    <label for="psw"><b>Password</b></label> 
      <input type="password" class="form-control" name="password" placeholder="Enter password" id="myInput" style="color: black">
      <input type="checkbox" onclick="myFunction()">Show Password
      <span class="psw" style="float: right;">Forgot <a href="#" style="color: yellow; ">password?</a></span>
    <button type="submit" class="btnlogin" name="signin" >Login</button>
    <span class="register" ">Don't have an account? Please <a href="5.1.2register.php" style="color: yellow;">Register</a></span>

  <?php
  include("connect.php");
if (isset($_POST['signin'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $select = "SELECT * FROM user WHERE email='$email' AND password='$password';";
  $result = mysqli_query($connection, $select);
  $row = mysqli_fetch_array($result);

          if (mysqli_num_rows($result)==1) {
            session_start();
            $_SESSION['nama']=$row['nama'];
            $_SESSION['email']=$row['email'];

            echo "<meta http-equiv='refresh' content='0;url=1.index.php'> ";
          } else {?>

        <div class="alert alert-danger" role="alert ">
          Login Gagal!! Periksa Kembali Username dan Password Anda.
        </div>

        <?php   }

}

?>
</form>
</div>



<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#login" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>@Copyright</p> 
</footer>

<script>

function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#login']").on('click', function(event) {

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
