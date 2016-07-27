#!/usr/bin/php
<?php

require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFnt('Arial', 'B',11);
$pdf->Cell(40,10,'Hello world')
$pdf->output();

?>
