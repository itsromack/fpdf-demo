<?php
include "vendor/autoload.php";

use Fpdf\Fpdf;

$pdf = new Fpdf();
$pdf->AddFont('Ringbearer');
$pdf->AddPage();
$pdf->SetFont('Ringbearer','',35);
$pdf->Write(10,'The Lord Of The Rings');

$pdf->Ln(20);

$pdf->SetFont('Ringbearer','',15);
$pdf->Write(10,'Written By John Ronald Reuel Tolkien');
$pdf->Output('D', 'lotr.pdf');

// Run php vendor/fpdf/fpdf/src/Fpdf/makefont/makefont.php fonts/ringbearer.ttf
// Move the generated files to the font folder (vendor/fpdf/fpdf/src/Fpdf/font/)