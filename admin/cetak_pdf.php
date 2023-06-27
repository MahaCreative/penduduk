<?php 
// menghubungkan dengan dompdf
require_once("../assets/dompdf/dompdf_config.inc.php");

// koneksi database
include '../koneksi.php';

$html = '<!DOCTYPE html>';
$html .= '<html>';
$html .= '<head>';
$html .= '	<title>Sistem Informasi Pendataan Masyarakat Tidak Mampu Kelurahan Binanga</title>';
$html .= '</head>';
$html .= '<body>';
$html .= '<center><h2>SIPMTM " Kelurahan Binanga "</h2></center>';

$dari = $_GET['dari'];
$sampai = $_GET['sampai'];


$html .= '<h4>Data Laporan Masyarakat Tidak Mampu dari <b>' . $dari . '</b> sampai <b>' . $sampai . '</b></h4>';
$html .= '<table border="1" width="100%">';
$html .= '<tr>';
$html .= '<th width="1%">No</th>';
$html .= '<th>NIK</th>';
$html .= '<th>Nama Kepala Keluarga</th>';
$html .= '<th>Lingkungan</th>';
$html .= '<th>Alamat</th>';
$html .= '<th>Hp</th>';
$html .= '<th>Tanggal</th>				';
$html .= '</tr>';


$data = mysqli_query($koneksi, "SELECT * from lingkungan, penduduk where penduduk_lingkungan=lingkungan_id and date(penduduk_tgl) > '$dari' and date(penduduk_tgl) < '$sampai' order by penduduk_id desc");
$no = 1;

while ($d = mysqli_fetch_array($data)) {

	$html .= '<tr>';
	$html .= '<td>' . $no++ . '</td>';
	$html .= '<td>' . $d['penduduk_nik'] . '</td>';
	$html .= '<td>' . $d['penduduk_nama'] . '</td>';
	$html .= '<td>' . $d['lingkungan_nama'] . '</td>';
	$html .= '<td>' . $d['penduduk_alamat'] . '</td>';
	$html .= '<td>' . $d['penduduk_tlp'] . '</td>';
	$html .= '<td>' . $d['penduduk_tgl'] . ' </td>';	
	$html .= '</tr>';
}

$html .= '</table>';
$html .= '</body>';
$html .= '</html>';



$dompdf = new DOMPDF();
$dompdf->set_paper('a4', 'landscape');
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('laporan_dari' . $dari . '_sampai_' . $sampai . '.pdf');
 