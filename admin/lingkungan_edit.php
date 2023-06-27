<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-5 col-md-offset-3">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Lingkungan</h4>
			</div>
			<div class="panel-body">

				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';

				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

	
				$data = mysqli_query($koneksi,"select * from lingkungan where lingkungan_id='$id'");
				while($d=mysqli_fetch_array($data)){
					?>

					<form method="post" action="lingkungan_update.php">
						<div class="form-group">
							<label>Nama</label>
						
							<input type="hidden" name="id" value="<?php echo $d['lingkungan_id']; ?>">
							
							<input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lingkungan.." value="<?php echo $d['lingkungan_nama']; ?>" autocomplete="off">
						</div>	


						<div class="form-group">
							<label>Kepala Lingkungan</label>
							<input type="text" class="form-control" name="kepala" placeholder="Masukkan Kepala Lingkungan .." value="<?php echo $d['lingkungan_kepala']; ?>" autocomplete="off">
						</div>	

						<br/>

						<input type="submit" class="btn btn-primary" value="Simpan">	
					</form>

					<?php 
				}
				?>
			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>