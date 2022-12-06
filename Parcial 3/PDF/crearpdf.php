<?php
$dato=$_POST['inpDato'];
require('./FPDF/FPDF/fpdf.php');


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'PDF CREADO POR: Alejandro Garza Mendez');
$pdf->Ln(10);
$pdf->Cell(40,10, $dato);
$pdf->Output();
?>