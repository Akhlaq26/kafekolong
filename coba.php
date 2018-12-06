    <div class="col-md-2">
       <img src="image/<?php echo $data['mejagambar']?>"  style="width: 500px; height: 300px;">
       <center><input type="radio" name="meja"><?php echo $data['nomeja']?></center>
    </div>
<!DOCTYPE html>
<html>
<head>
	<title>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP - WWW.MALASNGODING.COM</title>
</head>
<body>

	<center>

		<h2>MENAMPILKAN DATA DARI DATABASE SESUAI TANGGAL DENGAN PHP<br/><a href="https://www.malasngoding.com">WWW.MALASNGODING.COM</a></h2>


		<?php 
		include 'connect.php';
		?>

		<br/><br/><br/>

		<form method="get">
			<label>PILIH TANGGAL</label>
			<input type="date" name="tanggal">
			<input type="submit" value="FILTER">
		</form>

		<br/> <br/>

		<table border="1">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Barang</th>
				<th>Jumlah</th>
			</tr>
			<?php 
			$no = 1;

			if(isset($_GET['tanggal'])){
				$tgl = $_GET['tanggal'];
				$sql = mysqli_query($connection,"select * from transaksi join meja on transaksi.nomeja=meja.nomeja where tanggal!='$tgl'");
			}else{
				$sql = mysqli_query($connection,"select * from transaksi");
			}
			
			while($data = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $data['tanggal']; ?></td>
				<td><?php echo $data['email']; ?></td>
				<td><?php echo $data['nomeja']; ?></td>
			</tr>
			<?php 
			}
			?>
		</table>

	</center>
</body>
</html>