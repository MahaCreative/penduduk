<?php 
// menghubungkan koneksi
include '../koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET['id'];

// menghapus penduduk
mysqli_query($koneksi,"delete from penduduk where penduduk_id='$id'");


echo "<script> 
            alert('Data berhasil dihapus!');
            document.location.href = 'penduduk.php';
        </script>
    ";
?>