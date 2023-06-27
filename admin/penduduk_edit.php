<?php include 'header.php'; ?>

<div class="container">	
	<br/>
	<br/>
	<br/>
	<div class="col-md-8 col-md-offset-2">
		
		<div class="panel">
			<div class="panel-heading">
				<h4>Edit Data Penduduk</h4>
			</div>
			<div class="panel-body">

				<?php 
				// menghubungkan koneksi
				include '../koneksi.php';

				// menangkap id yang dikirim melalui url
				$id = $_GET['id'];

				
				$data = mysqli_query($koneksi,"select * from penduduk where penduduk_id='$id'");
				while($t=mysqli_fetch_array($data)){
					?>

					<form method="post" action="penduduk_update.php">
						<div class="form-group">
							<label>NIK</label>
							
							<input type="hidden" name="id" value="<?php echo $t['penduduk_id']; ?>">
							
							<input type="text" class="form-control" name="nik" placeholder="Masukkan nama .." value="<?php echo $t['penduduk_nik']; ?>">
						</div>	
			
							<div class="form-group">
							<label>Nama</label>
							<input type="text" class="form-control" name="nama" placeholder="Masukkan alamat .." value="<?php echo $t['penduduk_nama']; ?>">
						</div>	
						<div class="form-group">
							<label>Lingkungan</label>
							<select class="form-control" name="lingkungan" required="required">	
								<option value="">- Pilih Lingkungan</option>						
								<?php 						
						
								$data = mysqli_query($koneksi,"select * from lingkungan");						
								// mengubah data ke array dan menampilkannya dengan perulangan while
								while($d=mysqli_fetch_array($data)){
									?>
									<option <?php if($d['lingkungan_id']==$t['penduduk_lingkungan']){echo "selected='selected'";} ?> value="<?php echo $d['lingkungan_id']; ?>"><?php echo $d['lingkungan_nama']; ?></option>								
									<?php 
								}
								?>		
							</select>				
						</div>	
							<div class="form-group">
							<label>Alamat</label>
							<input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." value="<?php echo $t['penduduk_alamat']; ?>">
						</div>	
							

						<div class="form-group">
						<label>HP</label>
						<input type="number" class="form-control" name="hp" onkeypress="return hanyaAngka(event)" placeholder="Masukkan no.hp .." autocomplete="off" value="<?php echo $t['penduduk_tlp']; ?>">
						<script>
							function hanyaAngka(evt) {
								var charCode = (evt.which) ? evt.which : event.keyCode
								if (charCode > 31 && (charCode < 48 || charCode > 57))

									return false;
								return true;
							}
						</script>
							</div>

								<div class="form-group">
						<label>Penghasilan Perbulan</label>
						<input type="number" class="form-control" name="penghasilan" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Penghasilan .." autocomplete="off" value="<?php echo $t['penduduk_penghasilan']; ?>">
						<script>
							function hanyaAngka(evt) {
								var charCode = (evt.which) ? evt.which : event.keyCode
								if (charCode > 31 && (charCode < 48 || charCode > 57))

									return false;
								return true;
							}
						</script>
							</div>
						
						<div class="form-group">
						<label>Tanggal</label>
						<input type="date" class="form-control" name="tgl" placeholder="Masukkan Tgl.."  autocomplete="off" required value="<?php echo $t['penduduk_tgl']; ?>">
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