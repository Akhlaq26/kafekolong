<nav class="navbar  navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="width: 70px;"><i class="fa fa-bars fa-5x" style="float: right; color: #f7ca18;"></i>                       
      </button>
      <img src="image/kk.png" alt="Chicago" width="100" height="100">
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" style="padding-top: 25px">
        <li><a href="1.index.php">HOME</a></li>
        <li><a href="2.menu.php" name="allmenu">MENU</a></li>
        <li><a href="3.1.order.php">ORDER</a></li>
        <li><a href="4.1.event.php">EVENT</a></li>
        <?php      if (isset($_SESSION['nama'])) {?>
                        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>
    <?php echo $_SESSION['nama'];?>
    <i class="fa fa-caret-down"></i>
   <?php }else{
    echo "<li><a href=5.1.1.login.php   >LOGIN</a></li>";
   }
    ?>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="icon-off"></i>Logout</a></li
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
      </ul>
    </div>
  </div>
</nav>
