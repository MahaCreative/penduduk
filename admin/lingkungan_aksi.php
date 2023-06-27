<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nama = $_POST['nama'];
$kepala = $_POST['kepala'];


mysqli_query($koneksi,"insert into lingkungan values('','$nama','$kepala')");

header("location:lingkungan.php");

?>