<?php  
//menyertakan "koneksi.php" dalam source code
include "koneksi.php";

//memanggil phpspreadsheet
require "vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//inisiasi spreadsheet
$Spreadsheet = new Spreadsheet();
$sheet = $Spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Kelas');
$sheet->setCellValue('D1', 'Alamat');

//memanggil data dari phpmyadmin
$query = mysqli_query($conn, "select * from  tb_siswa");

//inisiasi variabel untuk while loop
$i = 2;
$no = 1;

//while loop setCellValue dengan memanggil isi tabel
while ($row = mysqli_fetch_array($query)) 
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['kelas']);
	$sheet->setCellValue('D'.$i, $row['alamat']);
	$i++;
}

//mengatur bentuk bingkai dalam spreadsheet
$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
					],
				],
			];

//menerapkan bingkai dalam spreadsheet
$i = $i-1;
$sheet->getStyle('A1:D'.$i)->applyFromArray($styleArray);

//menyimpan spreadsheet dengan nama "Report Data Siswa.xlsx"
$writer = new Xlsx($Spreadsheet);
$writer->save('Report Data Siswa.xlsx');

header("location: cetakdaftarsiswa.php");

?>