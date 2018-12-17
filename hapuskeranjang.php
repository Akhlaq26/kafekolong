
<div class="modal fade" id="modalHapus<?php echo $idmenu?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">HAPUS BUKU</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    Apakah anda yakin ingin menghapus <strong><?php echo $pecah['nama']?></strong>?
    </div>
    <div class="modal-footer">
       <button type="submit" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <a href="fungsi_hapus.php?id=<?php echo $idmenu ?>"><button class="btn btn-danger">Hapus</button></a>
    </div>
  </div>
</div>