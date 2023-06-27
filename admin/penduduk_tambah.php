<?php include 'header.php'; ?>
<?php

// koneksi database
include '../koneksi.php';
?>
<div class="container">
	<br />
	<br />
	<br />
	<div class="col-md-8 col-md-offset-2">

		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Penduduk Baru</h4>
			</div>
			<div class="panel-body">


				<form method="post" action="penduduk_aksi.php">
					<div class="form-group">
						<label>NIK</label>
						<input type="text" class="form-control" name="nik" placeholder="Masukkan Nik .." autocomplete="off" onkeypress="return hanyaAngka(event)" required>
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
						<label>Nama</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan nama .." autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>Lingkungan</label>
						<select class="form-control" name="lingkungan" required="required">
							<option value="">- Pilih Lingkungan</option>
							<?php
					
							$data = mysqli_query($koneksi, "select * from lingkungan");
							// mengubah data ke array dan menampilkannya dengan perulangan while
							while ($d = mysqli_fetch_array($data)) {
								?>
								<option value="<?php echo $d['lingkungan_id']; ?>"><?php echo $d['lingkungan_nama']; ?></option>
							<?php
						}
						?>
						</select>
					</div>
					<div class="form-group">
						<label>Alamat</label>
						<input type="text" class="form-control" name="alamat" placeholder="Masukkan alamat .." autocomplete="off" required>
					</div>
					<div class="form-group">
						<label>HP</label>
						<input type="number" class="form-control" name="hp" onkeypress="return hanyaAngka(event)" placeholder="Masukkan no.hp .." autocomplete="off">
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
						<input type="number" class="form-control" name="penghasilan" onkeypress="return hanyaAngka(event)" placeholder="Masukkan Penghasilan .." autocomplete="off">
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
						<input type="date" class="form-control" name="tgl" placeholder="Masukkan Tgl.."  autocomplete="off" required>
					</div>

					<br />

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>