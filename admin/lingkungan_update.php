<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kepala = $_POST['kepala'];

// update data
mysqli_query($koneksi,"update lingkungan set lingkungan_nama='$nama', lingkungan_kepala='$kepala' where lingkungan_id='$id'");

// mengalihkan halaman kembali ke halaman pelanggan
header("location:lingkungan.php");

?>