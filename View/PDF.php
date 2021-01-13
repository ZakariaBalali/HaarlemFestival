
<?php

require_once '../Model/mypdf.php';
require_once '../Model/Customer.php';
require_once '../lib/fpdf.php';


$customer = new Customer($CustomerID,$FirstName,$LastName,$Email,$PhoneNumber,$OrderID);

$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 20);

$pdf->Cell(0, 10, 'Ticket Invoice  ',0,1,'C');

$pdf->SetFont('Arial','',12);

$pdf->Ln(30);

$pdf->Cell(0, 10, 'This invoice contains the order number and barcode that gives you access to the festival',0,1,'L');

$pdf->Ln();

$pdf->Cell(0, 10, 'OrderNumber: ' .$customer->getOrderID(),0,1,'L');
$pdf->Cell(0, 10, 'Firstname: ' .$customer->getFirstName(),0,1,'L');
$pdf->Cell(0, 10, 'Lastname: ' .$customer->getLastName(),0,1,'L');
$pdf->Cell(0, 10, 'Email: ' .$customer->getEmail(),0,1,'L');

$pdf->output();










?>