<?php include 'header.php'; ?>

   
    
<div class="container">
	<div class="panel">
		<div class="panel-heading">
			<h4>Data Penduduk</h4>
		</div>
		<div class="panel-body">

			<a href="penduduk_tambah.php" class="btn btn-sm btn-info pull-right">Tambah</a>
			
			<br/>
			<br/>

			<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
				<tr>
					<th width="1%">No</th>
					<th>NIK</th>
					<th>Nama KK</th>
					<th>Lingkungan</th>
					<th>Alamat</th>
					<th>HP</th>
					<th>Penghasilan Perbulan</th>
					<th>Tanggal</th>
					<th width="15%">OPSI</th>
				</tr>
 </thead>
   <tbody>
				<?php 
				// koneksi database
				include '../koneksi.php';

				// mengambil data pelanggan dari database
				$data = mysqli_query($koneksi,"select * from lingkungan, penduduk where penduduk_lingkungan=lingkungan_id order by penduduk_id");
				$no = 1;
				// mengubah data ke array dan menampilkannya dengan perulangan while
				while($d=mysqli_fetch_array($data)){
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['penduduk_nik']; ?></td>
						<td><?php echo $d['penduduk_nama']; ?></td>
						<td><?php echo $d['lingkungan_nama']; ?></td>
						<td><?php echo $d['penduduk_alamat']; ?></td>
						<td><?php echo $d['penduduk_tlp']; ?></td>
						<td><?php echo $d['penduduk_penghasilan']; ?></td>
						<td><?php echo date('d/m/Y', strtotime($d['penduduk_tgl'])); ?></td>
						
						<td>
							<a href="penduduk_edit.php?id=<?php echo $d['penduduk_id']; ?>" class="btn btn-sm btn-info" onclick = "return confirm('Yakin Data Akan Diubah');">Edit</a>
							<a href="penduduk_hapus.php?id=<?php echo $d['penduduk_id']; ?>" class="btn btn-sm btn-danger" onclick = "return confirm('Yakin Data Akan Dihapus');">Hapus</a>
						</td>
					</tr>
					  </tbody>
					<?php 
				}
				?>
			</table>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>