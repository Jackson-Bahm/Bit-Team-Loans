#!/usr/bin/php
<?php

require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',11);
$pdf->Cell(0,10,"Loan Agreement",1,1,"C");
$pdf->output();

?>
