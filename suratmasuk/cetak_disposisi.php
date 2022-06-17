<?php
// memanggil library FPDF
require('../fpdf182/fpdf.php');
include 'function.php';

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p', 'mm', 'A4');

// membuat halaman baru

// ;
$pdf->SetMargins(5, 4, 5);
$pdf->AddPage();
$pdf->Rect(5, 4, 200, 139, 'D');
$pdf->Rect(4, 3, 202, 141, 'D');
// header

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(200, 1, '', 0, 1);
$pdf->Cell(55, 4, '', 0, 0);
$pdf->Cell(125, 4, 'BADAN METEOROLOGI, KLIMATOLOGI, DAN GEOFISIKA', 0, 0);
$pdf->SetFont('Arial', '', 7);
$pdf->Cell(19, 4, 'FM.TU.06.00.02', 1, 1, "C");

$pdf->Image('../img/logo-bmkg.png', 30, 7, 13);
$pdf->Image('../img/logo-nqa.png', 164, 7, 20);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(200, 4, 'STASIUN METEOROLOGI KELAS I JUANDA SIDOARJO', 0, 1, 'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(200, 3, 'Bandar Udara Internasional Juanda Surabaya', 0, 1, 'C');
$pdf->Cell(200, 3, 'Telepon: (031) 8667540, Fax: (031) 8675342', 0, 1, 'C');
$pdf->Cell(200, 3, 'Email: stamet.juanda@bmkg.go.id dan kstujud@gmail.com', 0, 1, 'C');
$pdf->Cell(200, 3, 'Website: juanda.jatim.bmkg.go.id', 0, 1, 'C');
//-------------------------------------------------------------------------

// judul
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(200, 1, '', 0, 1);
$pdf->Cell(200, 6, 'LEMBAR DISPOSISI', 1, 1, 'C');

$id = $_GET['id'];
$row = query("SELECT * FROM surat_masuk WHERE id = $id")[0];

// data teknis
$pdf->SetTitle($row['no_agenda']);

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(35, 5, 'Nomor Agenda', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, $row['no_agenda'], 'T,B', 1);
$pdf->Cell(35, 5, 'Tingkat Keamanan', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, $row['tk_keamanan'], 'T,B', 1);
$pdf->Cell(35, 5, 'Tanggal Penerimaan', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, tanggal_indo($row['tgl_agenda']), 'T,B', 1);
$pdf->Cell(35, 5, 'Nomor Surat', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, htmlspecialchars_decode($row['no_surat']), 'T,B', 1);
$pdf->Cell(35, 5, 'Tanggal Surat', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, tanggal_indo($row['tgl_surat']), 'T,B', 1);
$pdf->Cell(35, 5, 'Asal Surat', 'T,B', 0);
$pdf->Cell(1, 5, ':', 'T,B', 0, 'C');
$pdf->Cell(164, 5, htmlspecialchars_decode($row['asal_surat']), 'T,B', 1);
$pdf->Cell(35, 5, 'Perihal', 'T', 0);
$pdf->Cell(1, 5, ':', 'T', 0, 'C');
$pdf->MultiCell(164, 5, htmlspecialchars_decode($row['perihal']), 'T', 1);

$tek = explode(',', $row['diteruskan']);
$user0 = $tek[0];
$user1 = $tek[1];
// $user2 = $tek[2];
if(empty($tek[2])){
    $user2 = '';
}else{
    $user2=$tek[2];
}
if(empty($tek[3])){
    $user3 = '';
}else{
    $user3=$tek[3];
}
// $user3 = 'plpk';
$user4 = 'usler';
// $daftartek = $row["diteruskan"];

// $tek[1];
// $notek = 1;
// echo "<pre>";
// print_r($tek);
// echo "</pre>";
// foreach ($array as $teknisi) {
//     if ($teknisi != "") {
//         $tahutek = $notek . "." . $teknisi;
//     }
//     $notek++;

// }
//----------------------------------------
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(200, 5, 'Diteruskan kepada Yth:', 1, 1, 'C');

if ($user0 == 'kstu' || $user1 == 'kstu' || $user2 == 'kstu' || $user3 == 'kstu' || $user4 == 'kstu') {
    
    $pdf->SetTextColor(0, 0, 204);
    $pdf->Cell(5, 6, '', 'T,B', 0, 'L');
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(52), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(45, 6, 'Kasubag Tata Usaha', 'T,B', 0, 'L');
    $pdf->SetTextColor(0, 0, 0);
} else {
    $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetTextColor(200, 200, 200);
    $pdf->Cell(5, 6, '', 'T,B', 0, 'L');
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(45, 6, 'Kasubag Tata Usaha', 'T,B', 0, 'L');
}

if ($user0 == 'kdat' || $user1 == 'kdat' || $user2 == 'kdat' || $user3 == 'kdat' || $user4 == 'kdat') {
    $pdf->SetTextColor(0, 0, 204);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(52), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(35, 6, 'KoorBid Datin', 'T,B', 0, 'L');
    $pdf->SetTextColor(0, 0, 0);
} else {
    $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetTextColor(200, 200, 200);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(35, 6, 'KoorBid Datin', 'T,B', 0, 'L');
}

if ($user0 == 'kobs' || $user1 == 'kobs' || $user2 == 'kobs' || $user3 == 'kobs' || $user4 == 'kobs') {
    $pdf->SetTextColor(0, 0, 204);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(52), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(40, 6, 'KoorBid Observasi', 'T,B', 0, 'L');
    $pdf->SetTextColor(0, 0, 0);
} else {
    $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetTextColor(200, 200, 200);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(40, 6, 'KoorBid Observasi', 'T,B', 0, 'L');
}

if ($user0 == 'ppk' || $user1 == 'ppk' || $user2 == 'ppk' || $user3 == 'ppk' || $user4 == 'ppk') {
    $pdf->SetTextColor(0, 0, 204);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(52), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(20, 6, 'PPK', 'T,B', 0, 'L');
    $pdf->SetTextColor(0, 0, 0);
} else {
    $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetTextColor(200, 200, 200);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(20, 6, 'PPK', 'T,B', 0, 'L');
}

if ($user0 == 'user' || $user1 == 'user' || $user2 == 'user' || $user3 == 'user' || $user4 == 'user') {
    $pdf->SetTextColor(0, 0, 204);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(52), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(35, 6, '__________', 'T,B', 1, 'L');
    $pdf->SetTextColor(0, 0, 0);
} else {
    $pdf->SetTextColor(0, 0, 0);
    // $pdf->SetTextColor(200, 200, 200);
    $pdf->SetFont('ZapfDingbats', '', 10);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 9);
    $pdf->Cell(35, 6, '__________', 'T,B', 1, 'L');
    $pdf->SetTextColor(0, 0, 0);
}

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(200, 6, 'Disposisi:', 1, 1, 'C');

$tek = explode(',', $row['pilihan']);
$user0 = $tek[0];
if(empty($tek[1])){
    $user1 = '';
}else{
    $user1=$tek[1];
}
// $user2 = $tek[2];
if(empty($tek[2])){
    $user2 = '';
}else{
    $user2=$tek[2];
}
if(empty($tek[3])){
    $user3 = '';
}else{
    $user3=$tek[3];
}

if ($user0 == 'kstu' || $user1 == 'kstu' || $user2 == 'kstu' || $user3 == 'kstu' || $user4 == 'kstu') {
$pdf->Cell(65, 6, '', 'T,B', 0, 'L');
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(50, 6, 'Tindak Lanjut', 'T,B', 0, 'L');
}else{
    $pdf->Cell(65, 6, '', 'T,B', 0, 'L');
    $pdf->SetFont('ZapfDingbats', '', 11);
    $pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(50, 6, 'Tindak Lanjut', 'T,B', 0, 'L');  
}
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 6, chr(111), 'T,B', 0);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(75, 6, 'Diketahui', 'T,B', 1, 'L');

//Baris 1....................
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), 'T', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Harap Mewakili', 'T', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), 'T', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 5, 'Dikonsultasikan dengan', 'T', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), 'T', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(32, 5, 'Untuk diteruskan', 'T', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), 'T', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(54, 5, 'Untuk dimonitor', 'T', 1, 'L');

//Baris 2.....
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Hadir mendampingi', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 5, 'Dibuat surat jawaban', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(32, 5, 'Untuk diselesaikan', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(54, 5, 'Untuk dijadikan bahan masukan', '0', 1, 'L');

//Baris 3................
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Segera ditindaklanjuti', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 5, 'Bahan monitoring', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(32, 5, 'Untuk dipelajari', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(54, 5, 'Untuk didiskusikan dengan...', '0', 1, 'L');

//Baris 4............
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Mohon tanggapan/saran/masukan', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 5, 'Buat Surat Edaran', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(32, 5, 'Untuk diketahui', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(54, 5, 'Untuk dikoordinasikan dengan...', '0', 1, 'L');

//Baris 5..............
$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(55, 5, 'Fasilitasi sesuai ketetapan berlaku', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(45, 5, 'Untuk dibuat Surat Tugas', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(32, 5, 'Untuk direkap ', '0', 0, 'L');

$pdf->SetFont('ZapfDingbats', '', 11);
$pdf->Cell(3.5, 5, chr(111), '0', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(54, 5, 'Untuk diarsipkan', '0', 1, 'L');

$pdf->SetFont('Arial', '', 9);
$pdf->Cell(200, 5, 'Catatan Khusus:', 'T', 1, 'L');

$pdf->Output();
