
<?php
require_once '../Model/mypdf.php';
require_once '../Logic/CustomerLogic.php';
require_once '../lib/fpdf.php';
require_once '../lib/phpqrcode/qrlib.php';


$Customers = [];
$customerLogic = new CustomerLogic();
$Customers = (array)$customerLogic->GetCustomerByID("4");



$pdf = new FPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 30);

$pdf->Cell(0, 10, 'Ticket Invoice  ',0,1,'C');

$pdf->SetFont('Arial','',12);

$pdf->Ln(30);

$pdf->Cell(0, 10, 'This invoice contains the order number and barcode that gives you access to the festival',0,1,'L');

$pdf->Ln();


foreach ($Customers as $customer) {
$pdf->Cell(0,10,'Date of purchase: ' . date("d/m/y"),0,1,'L');
$pdf->Cell(0, 10, 'Order Number: ' .$customer->getOrderID(),0,1,'L');
$pdf->Cell(0, 10, 'First name: ' .$customer->getFirstName(),0,1,'L');
$pdf->Cell(0, 10, 'Last name: ' .$customer->getLastName(),0,1,'L');
$pdf->Cell(0, 10, 'Email: ' .$customer->getEmail(),0,1,'L');
$pdf->Cell(0, 10, 'Phone-Number: 0' .$customer->getPhoneNumber(),0,1,'L');


// how to save PNG codes to server

$tempDir = '../lib/qrcodes/';

$codeContents = ' this is your QR code for the Festival';

// we need to generate filename somehow, 
// with md5 or with database ID used to obtains $codeContents...
$fileName = '005_file_'.md5($customer->getOrderID()).'.png';

$pngAbsoluteFilePath = $tempDir.$fileName;
$urlRelativeFilePath = $tempDir.$fileName;

// generating
if (!file_exists($pngAbsoluteFilePath)) {
    QRcode::png($codeContents, $pngAbsoluteFilePath);
   
}

// displaying
$pdf->Image($urlRelativeFilePath, null, null, 50, 50);
$pdf->Cell(0,10,($customer->getFirstName() . ' ' .$customer->getLastName() . $codeContents),0,1,'L');

}



$pdf->output();
  









?>