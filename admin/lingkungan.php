<?php include 'header.php'; ?>

<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Lingkungan</h4>
		</div>
		<div class="panel-body">

			<a href="lingkungan_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
			
			<br/>
			<br/>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
				<tr>
					<th width="1%">No</th>
					<th>Lingkungan</th>
					<th>Kepala Lingkungan</th>
					<th width="15%">OPSI</th>
				</tr>
 </thead>
   <tbody>
				<?php 
				// koneksi database
				include '../koneksi.php';

		
				$data = mysqli_query($koneksi,"select * from lingkungan");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['lingkungan_nama']; ?></td>
						<td><?php echo $d['lingkungan_kepala']; ?></td>
						
						<td>
							<a href="lingkungan_edit.php?id=<?php echo $d['lingkungan_id']; ?>" class="btn btn-sm btn-info">Edit</a>
							<a href="lingkungan_hapus.php?id=<?php echo $d['lingkungan_id']; ?>" class="btn btn-sm btn-danger">Hapus</a>
						</td>
					</tr>
					<?php 
				}
				?>
				  </tbody>
			</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>