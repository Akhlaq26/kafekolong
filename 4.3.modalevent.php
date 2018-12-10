<!-- Modal detail-->

<div class="modal fade" id="modalevent<?php echo $row['idevent'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">DETAIL EVENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php
      $idevent=$row["idevent"];
      $queryselecetedit = "SELECT * FROM event WHERE idevent=$idevent";
      $resultselectededit = mysqli_query($connection,$queryselecetedit);
      $rowselectededit = mysqli_fetch_assoc($resultselectededit);
      ?>
      <form method="post">
      <div class="modal-body">
  <div class="form-group row">
    <input type="hidden" name="idevent" value="<?php echo $idevent?>">
     <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label"></label>
    <div class="col-sm-10">
       <img src="image/<?php echo $rowselectededit['gambar']?>" style="width: 500px; height: 300px;">
    </div>
    <label for="inputEmail3" class="col-sm-3 col-form-label">NAMA EVENT</label>
    <div class="col-sm-10">
      <?php echo $rowselectededit['namaevent']?>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">TANGGAL</label>
    <div class="col-sm-10">
      <?php echo $rowselectededit['tanggal']?>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">DESKRIPSI</label>
    <div class="col-sm-10">
      <?php echo $rowselectededit['deskripsi']?>
    </div>
  </div>
  
  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
     </form>
  </div>
</div>