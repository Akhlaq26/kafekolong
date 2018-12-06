<?php
  include('connect.php');
?>
<?php
 if (isset($_POST['buttoninsert'])) {
          $tanggal = $_POST['tanggal1'];
          $email = $_POST['email'];
          $nomeja = $_POST['nomeja'];
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
<!-- Modal insert buku-->

<div class="modal fade" id="modalPilih" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php
      $nomeja=["nomeja"];

      ?>

      <form method="post">
      <div class="modal-body">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="tanggal1" placeholder="tanggal" value="<?php echo $tgl?>" >
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" placeholder="email" value="<?php  echo $_SESSION['email']?>">
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Waktu</label>
    <div class="col-sm-10">
      <input type="time" class="form-control" name="jam" placeholder="Waktu">
    </div>
  </div>
     <div class="form-group row">
    <div class="col-sm-10">
      <input type="number" class="form-control" name="nomeja1" placeholder="Tahun Terbit" value="<?php echo $nomeja?>" >
    </div>
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="buttoninsert" class="btn btn-primary">Pesan Meja</button>
      </div>
    </div>
     </form>
  </div>
</div>