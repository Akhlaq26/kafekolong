<?php
include("connect.php");
session_start();
$emaillogin =$_SESSION['email'];
        if (isset($_POST['submit'])) {
          $oldpassword = $_POST['oldpassword'];
          $newpassword = $_POST['newpassword'];
          $email = $_POST['email'];
          

          $querypassword="SELECT * FROM user WHERE email='$emaillogin'";
          $result =  mysqli_query($connection, $querypassword);
          $row =  mysqli_fetch_array($result);
          if ($oldpassword == $row['password'] AND $email == $row['email']) {
                $queryupdate ="UPDATE user SET password='$newpassword' WHERE email='$email'";
                mysqli_query($connection, $queryupdate);
                unset($_SESSION['email']);
                $_SESSION['email'] =  $emaillogin;
          echo "<meta http-equiv='refresh' content='0;url=5.2.change_password.php'> ";          }
          else{
            echo "<script>alert('password salah')</script>";
          }
      }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

img {
  border-radius: 50%;
}

.bg-img {
    /* The image used */
    background-image: url("kasir.jpg");

    min-height:1000px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
}

/* Add styles to the form container */

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn-profile {
    background-color: #b49a00;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn-profile:hover {
    opacity: 1;
}
</style>
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
</script>
</head>


<body id="profile" data-spy="scroll" data-target=".navbar" data-offset="50">

<?php
    include("header.php");
?>

<div class="bg-1">
<div class="container" style="background-color: white;">

<div class="singlain" style="float: right; width: 700px; background-color: white" >
    <form method="post">
      <center><h1>Your information</h1></center>
        <hr>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="email" placeholder="enter enail" value="<?php echo $emaillogin?>">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">old password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="oldpassword" placeholder="Enter old password">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">new Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="txtPassword" name="newpassword" placeholder="Enter new Password">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail3" class="col-sm-3 col-form-label">Re-password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="txtConfirmPassword"  placeholder="Enter Password">
          </div>
        </div>
        <button type="submit" id="update" name="submit" class="btn-profile">Update</button>
    </form>
</div>
<div class="lainemaneh" style="float: left; >
    <form action="/action_page.php" class="container2" style="padding-top:20px">
      <center><h1>PROFILE</h1></center>
        <hr>
        <center><img src="image/avatar.png" alt="Avatar" style="width:250px"></center>
        <a href="5.1.change.php"><button type="submit" class="btn-profile">Change</button></a>
        <a href="5.2.change_password.php"><button type="submit" class="btn-profile">Change password</button></a>
        <a href="5.3.change_email.php"><button type="submit" class="btn-profile">Change email</button></a>
        </hr>
    </form>
</div>
</div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#menu" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>@Copyright</p> 
</footer>

    <script type="text/javascript">
        $(function () {
            $("#update").click(function () {
                var password = $("#txtPassword").val();
                var confirmPassword = $("#txtConfirmPassword").val();
                if (password != confirmPassword) {
                    alert("Passwords do not match.");
                    return false;
                }
                return true;
            });
        });
    </script>

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