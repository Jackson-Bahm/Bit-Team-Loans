#!/usr/bin/php
<?php 
require('fpdf.php'); 

//create a FPDF object
$pdf=new FPDF();

//set document properties
$pdf->SetAuthor('Tom Guimberteau');
$pdf->SetTitle('Loan Agreement');

//set font for the entire document
$pdf->SetFont('Arial','B',20);
$pdf->SetTextColor(50,60,100);

//set up a page
$pdf->AddPage('P'); 
$pdf->SetDisplayMode(real,'default');

//insert an image and make it a link
$pdf->Image('logo.png',10,20,33,0,' ','http://www.fpdf.org/');

//display the title with a border around it
$pdf->SetXY(50,20);
$pdf->SetDrawColor(50,60,100);
$pdf->Cell(100,10,'Loan Agreement',1,0,'C',0);

//Set x and y position for the main text, reduce font size and write content
$pdf->SetXY (10,50);
$pdf->SetFontSize(11);
$pdf->Write(5,'Congratulations! You have generated a PDF.');

//Output the document
$pdf->Output('Loan-Agreement.pdf','I'); 
?>
