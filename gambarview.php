<?php
include("connect.php");
    if(isset($_GET['idmenu'])) {
        $sql = "SELECT * FROM menu WHERE idmenu=" . $_GET['idmenu'];
  		$result = mysqli_query($connection, $sql);
        or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysql_error());
  		$data = mysql_fetch_array($result);
  header("Content-type: " . $data["imageType"]);
        echo $data["gambar"];
 }
 mysql_close($connection);
?>
