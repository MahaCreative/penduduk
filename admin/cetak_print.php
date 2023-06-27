<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Pendataan Masyarakat Tidak Mampu Kelurahan Binanga</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
    <script type="text/javascript" src="../assets/js/jquery.js"></script>
    <script type="text/javascript" src="../assets/js/bootstrap.js"></script>

</head>

<body>
    <!-- cek apakah sudah login -->
    <?php 
	session_start();
	if ($_SESSION['status'] != "login") {
		header("location:../index.php?pesan=belum_login");
	}
	?>


    <?php 
	// koneksi database
	include '../koneksi.php';
	?>
    <div class="container">

        <center>
            <h2>SIPMTM " Kelurahan Binanga "</h2>
        </center>
        <br />
        <br />
        <?php 
		if (isset($_GET['dari']) && isset($_GET['sampai'])) {

			$dari = $_GET['dari'];
			$sampai = $_GET['sampai'];
			?>
        <h4>Data Laporan Masyarakat Tidak Mampu dari<b><?php echo $dari; ?></b> sampai <b><?php echo $sampai; ?></b></h4>
        <table class="table table-bordered table-striped">
            <tr>
                <th width="1%">No</th>
                <th>Nik</th>
                <th>Nama Kepala Keluarga</th>
                <th>Lingkungan</th>
                <th>Alamat</th>
                <th>HP</th>
                <th>Tanggal</th>
                </tr>

            <?php 


		$data = mysqli_query($koneksi, "SELECT * from lingkungan, penduduk where penduduk_lingkungan=lingkungan_id and date(penduduk_tgl) > '$dari' and date(penduduk_tgl) < '$sampai' order by penduduk_id desc");
$no = 1;
			// mengubah data ke array dan menampilkannya dengan perulangan while
			while ($d = mysqli_fetch_array($data)) {
				?>
            <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['penduduk_nik']; ?></td>
                        <td><?php echo $d['penduduk_nama']; ?></td>
                        <td><?php echo $d['lingkungan_nama']; ?></td>
                        <td><?php echo $d['penduduk_alamat']; ?></td>
                        <td><?php echo $d['penduduk_tlp']; ?></td>
                        <td><?php echo date('d/m/Y', strtotime($d['penduduk_tgl'])); ?></td>
            </tr>
            <?php 
		}
		?>
        </table>
        <?php 
	} ?>

    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html> 