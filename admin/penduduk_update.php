<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id = $_POST['id'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$lingkungan = $_POST['lingkungan'];
$alamat = $_POST['alamat'];
$hp = $_POST['hp'];
$penghasilan = $_POST['penghasilan'];
$tgl = $_POST['tgl'];

// update data
mysqli_query($koneksi,"UPDATE penduduk set penduduk_nik='$nik', penduduk_nama='$nama', penduduk_lingkungan='$lingkungan', penduduk_alamat='$alamat', penduduk_tlp='$hp', penduduk_penghasilan='$penghasilan', penduduk_tgl='$tgl' where penduduk_id='$id'");

// mengalihkan halaman kembali ke halaman penduduk
echo "<script> 
            alert('Data berhasil diubah!');
            document.location.href = 'penduduk.php';
        </script>
    ";

?>