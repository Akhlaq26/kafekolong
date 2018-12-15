
<!-- Modal insert buku-->

<div class="modal fade" id="modalPilih<?php echo $datameja['nomeja']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <?php
      $nomeja=$datameja["nomeja"];

      ?>

      <form method="post">
      <div class="modal-body">
  <div class="form-group row">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="tanggal1" placeholder="tanggal" value="<?php echo $tgl?>"  >
      <input type="text" class="form-control" placeholder="tanggal" value="<?php echo $tgl?>"  disabled>
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nama1" placeholder="nama" value="<?php  echo $_SESSION['nama']?>" >
    </div>
  </div>
   <div class="form-group row">
    <label for="inputEmail3" class="col-sm-3 col-form-label">Waktu</label>
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="jam1" placeholder="Waktu" value="<?php echo $jam?>" >
      <input type="time" class="form-control"  placeholder="Waktu" value="<?php echo $jam?>"  disabled>
    </div>
  </div>
     <div class="form-group row">
    <div class="col-sm-10">
      <input type="hidden" class="form-control" name="nomeja1" placeholder="Tahun Terbit" value="<?php echo $nomeja?>" >
      <input type="number" class="form-control" placeholder="Tahun Terbit" value="<?php echo $nomeja?>" disabled>
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