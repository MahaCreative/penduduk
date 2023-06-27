
<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Filter Laporan</h4>
		</div>
		<div class="panel-body">		

			<form action="lapor.php" method="get">
				<table class="table table-bordered table-striped">
					<tr>				
						<th>Dari Tanggal</th>
						<th>Sampai Tanggal</th>							
						<th width="1%"></th>
					</tr>
					<tr>
						<td>
							<br/>
							<input type="date" name="tgl_dari" class="form-control">
						</td>
						<td>
							<br/>
							<input type="date" name="tgl_sampai" class="form-control">
							<br/>
						</td>
						<td>
							<br/>
							<input type="submit" class="btn btn-primary" value="Filter">
						</td>
					</tr>

				</table>
			</form>
			
		</div>
	</div>

	<br/>

	<?php 
	if(isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])){

		$dari = $_GET['tgl_dari'];
		$sampai = $_GET['tgl_sampai'];

		?>
		<div class="panel">
			<div class="panel-heading">
				<h4>Data Laporan Pendudukk Tidak Mampu dari <b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
			</div>
			<div class="panel-body">			

				<a target="_blank" href="cetak_print.php?dari=<?php echo $dari; ?>&sampai=<?php echo $sampai; ?>" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-print"></i> CETAK</a>
				<br/>
				<br/>
				<table class="table table-bordered table-striped">
					<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
				<tr>
					<th width="1%">No</th>
					<th>NIK</th>
					<th>Nama KK</th>
					<th>Lingkungan</th>
					<th>Alamat</th>
					<th>HP</th>
					<th>Tanggal</th>
				
				</tr>
 </thead>

					<?php 
					// koneksi database
					include '../koneksi.php';

					

					// mengambil data pelanggan dari database
					$data = mysqli_query($koneksi,"SELECT * from lingkungan, penduduk where penduduk_lingkungan=lingkungan_id and date(penduduk_tgl) > '$dari' and date(penduduk_tgl) < '$sampai' order by penduduk_id desc");
					$no = 1;
					// mengubah data ke array dan menampilkannya dengan perulangan while
					while($d=mysqli_fetch_array($data)){
						?>
					  <tbody>
				
			
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['penduduk_nik']; ?></td>
						<td><?php echo $d['penduduk_nama']; ?></td>
						<td><?php echo $d['lingkungan_nama']; ?></td>
						<td><?php echo $d['penduduk_alamat']; ?></td>
						<td><?php echo $d['penduduk_tlp']; ?></td>
						<td><?php echo date('d/m/Y', strtotime($d['penduduk_tgl'])); ?></td>
						
						
					</tr>
					  </tbody>
					<?php 
				}
				?>
				</table>
			</div>
		</div>
		<?php } ?>

	</div>

	<?php include 'footer.php'; ?>