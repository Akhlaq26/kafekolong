<?php


include 'connect.php';

?>
  <div class="modal fade" id="modalKeranjang" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h1 class="modal-title">Keranjang Belanja</h1>
          <hr>
        </div>
        <div class="modal-body">
          		<table class="table table-bordered">
			<thead>
			<tr>
				<th>No</th>
				<th>Produk</th>
				<th>Harga</th>
				<th>Jumlah</th>
				<th>Subharga</th>
				<th>aksi</th>
			</tr>
			</thead>
			<tbody>
		       <?php if(empty($_SESSION["keranjang"])){?>
		           <font> Keranjang Kosong! Silahkan Pilih Menu :) </font>
		       <?php }else{

				$nomor=1; ?>
				<?php foreach ($_SESSION['keranjang'] as $idmenu => $jumlah): ?>
		<!--menampilkan produk-->
		<?php
		$ambil = $connection->query("SELECT * FROM menu WHERE idmenu='$idmenu'");
		$pecah = $ambil ->fetch_assoc();
		$subharga = $pecah["harga"]*$jumlah;  
		?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah ["nama"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga) ?></td>
					<td>
						<button class="btn btn-danger" data-toggle="modal" data-target="#modalHapus<?php echo $idmenu?>">HAPUS</button>
					</td>
					<?php
					include("hapuskeranjang.php");
					?>
				</tr>
				<?php $nomor++; ?>
				<?php endforeach ?>
				<?php }?>
			</tbody>
		</table>


        </div>
        <div class="modal-footer">
				<a href="checkout.php" class="btn btn-primary">Checkout</a>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
