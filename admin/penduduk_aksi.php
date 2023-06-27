<?php 

// menghubungkan dengan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$lingkungan = $_POST['lingkungan'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$penghasilan = $_POST['penghasilan'];
$tgl = $_POST['tgl'];

// input data ke tabel 
mysqli_query($koneksi,"insert into penduduk values('','$nik','$nama','$lingkungan','$alamat','$hp','$penghasilan','$tgl')");

header("location:penduduk.php");

?>