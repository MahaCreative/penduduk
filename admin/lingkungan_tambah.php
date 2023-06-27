<?php include 'header.php'; ?>

<div class="container">
	<br />
	<br />
	<br />
	<div class="col-md-5 col-md-offset-3">

		<div class="panel">
			<div class="panel-heading">
				<h4>Tambah Lingkungan Baru</h4>
			</div>
			<div class="panel-body">


				<form method="post" action="lingkungan_aksi.php">
					<div class="form-group">
						<label>Lingkungan</label>
						<input type="text" class="form-control" name="nama" placeholder="Masukkan Lingkungan.." autocomplete="off" required>
					</div>


					<div class="form-group">
						<label>Nama Kepala Lingkungan</label>
						<input type="text" class="form-control" name="kepala" placeholder="Masukkan Nama Kepala Lingkungan .." autocomplete="off">
					</div>

					<br />

					<input type="submit" class="btn btn-primary" value="Simpan">
				</form>


			</div>
		</div>
	</div>

</div>

<?php include 'footer.php'; ?>