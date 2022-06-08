<?php 
//menyertakan simpan_regist.php dalam source code
include "simpan_regist.php";

//memanggil phpspreadsheet
require "vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//inisiasi spreadsheet
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();

//set cell value spreadsheet
$sheet->setCellValue('A1', 'PENDAFTARAN SISWA BARU');

$sheet->setCellValue('A3', 'Nomor Peserta : ');
$sheet->setCellValue('B3', $nmrujian);
$sheet->setCellValue('A4', 'NIS : ');
$sheet->setCellValue('B4', $nis);
$sheet->setCellValue('A5', 'Jenis Pendaftaran : ');
$sheet->setCellValue('B5', $daftar);
$sheet->setCellValue('A6', 'Tanggal Masuk : ');
$sheet->setCellValue('B6', $tglmasuk);
$sheet->setCellValue('A7', 'Nama Lengkap : ');
$sheet->setCellValue('B7', $nama);
$sheet->setCellValue('A8', 'Jenis Kelamin : ');
$sheet->setCellValue('B8', $jkelamin);
$sheet->setCellValue('A9', 'NISN');
$sheet->setCellValue('B9', $nisn);
$sheet->setCellValue('A10', 'Tempat Lahir : ');
$sheet->setCellValue('B10', $tmptlahir);
$sheet->setCellValue('A11', 'Tanggal Lahir : ');
$sheet->setCellValue('B11', $tgllahir);
$sheet->setCellValue('A12', 'Agama : ');
$sheet->setCellValue('B12', $agama);
$sheet->setCellValue('A13', 'Alamat : ');
$sheet->setCellValue('B13', $alamat);
$sheet->setCellValue('A14', 'HP : ');
$sheet->setCellValue('B14', $hp);
$sheet->setCellValue('A15', 'Nama Ayah : ');
$sheet->setCellValue('B15', $ayah);
$sheet->setCellValue('A16', 'Pendidikan : ');
$sheet->setCellValue('B16', $pendik_ayah);
$sheet->setCellValue('A17', 'Pekerjaan : ');
$sheet->setCellValue('B17', $pekerjaan_ayah);
$sheet->setCellValue('A18', 'Nama Ibu : ');
$sheet->setCellValue('B18', $ibu);
$sheet->setCellValue('A19', 'Pendidikan : ');
$sheet->setCellValue('B19', $pendik_ibu);
$sheet->setCellValue('A20', 'Pekerjaan : ');
$sheet->setCellValue('B20', $pekerjaan_ibu);
$sheet->setCellValue('A22', 'TERIMA KASIH TELAH MENDAFTAR');

//menyimpan spreadsheet dengan nama "form siswa baru.xlsx"
$writer = new Xlsx($spreadsheet);
$writer->save('form siswa baru.xlsx');


?>