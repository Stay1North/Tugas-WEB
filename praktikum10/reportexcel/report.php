<?php
////memanggil phpspreadsheet
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//inisiasi spreadsheet
$Spreadsheet = new Spreadsheet();
$sheet = $Spreadsheet->getActiveSheet();

//set cell value spreadsheet
$sheet->setCellValue('A1', 'Hello World !');

//menyimpan spreadsheet dengan nama "hello world.xlsx"
$writer = new Xlsx($Spreadsheet);
$writer->save('hello world.xlsx');

?>