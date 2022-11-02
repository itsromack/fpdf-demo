<?php
include "vendor/autoload.php";
require "ringbearer.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('Ringbearer');
$pdf->AddPage();
$pdf->SetFont('Ringbearer','',35);
$pdf->Write(10,'The Lord Of The Rings');
$pdf->Output();

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/ringbearer.ttf
// Copy the generated files to the font folder