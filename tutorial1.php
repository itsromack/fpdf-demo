<?php

include "vendor/autoload.php";


use Fpdf\Fpdf;

$pdf = new Fpdf('L', 'mm', 'A5');
$pdf->AddPage();
$pdf->SetFont('Courier', 'B', 15);
$pdf->Cell(40, 10, 'Hello World!', 1);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(20, 200, 'Powered by FPDF');
$pdf->Output();