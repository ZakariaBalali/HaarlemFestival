
<?php
require_once '../Model/mypdf.php';
require_once '../Logic/CustomerLogic.php';
require_once '../lib/fpdf.php';


$Customers = [];
$customer = new CustomerLogic();
$CustomerByID =(array)$customer->GetCustomerByOrderID("1");



$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 20);

$pdf->Cell(0, 10, 'Ticket Invoice  ',0,1,'C');

$pdf->SetFont('Arial','',12);

$pdf->Ln(30);

$pdf->Cell(0, 10, 'This invoice contains the order number and barcode that gives you access to the festival',0,1,'L');

$pdf->Ln();

foreach ($CustomerByID as $customer) {

$pdf->Cell(0, 10, 'OrderNumber: ' .$customer->GetOrderID(),0,1,'L');
$pdf->Cell(0, 10, 'Firstname: ' .$customer->getFirstName(),0,1,'L');
$pdf->Cell(0, 10, 'Lastname: ' .$customer->getLastName(),0,1,'L');
$pdf->Cell(0, 10, 'Email: ' .$customer->getEmail(),0,1,'L');
$pdf->Cell(0, 10, 'Phone-Number: ' .$customer->getPhoneNumber(),0,1,'L');
}
$pdf->output();










?>