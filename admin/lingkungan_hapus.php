<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus pelanggan
mysqli_query($koneksi,"delete from lingkungan where lingkungan_id='$id'");

// alihkan halaman ke halaman pelanggan
header("location:lingkungan.php");
?>