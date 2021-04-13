<?php
require_once '../Model/mypdf.php';
require_once '../Logic/CustomerLogic.php';
require_once '../Logic/OrderItemLogic.php';
require_once '../lib/fpdf.php';
require_once '../lib/phpqrcode/qrlib.php';
require_once dirname(__FILE__) . '/../Logic/OrderLogic.php';

session_start();
// setting session to confirmed
unset($_SESSION['confirm']);
$_SESSION['confirm'] = "Confirm";

$OrderId = $_SESSION["OrderID"];

//User Order ID to get Customer
$Customers = [];
$customerLogic = new CustomerLogic();
$Customers = (array)$customerLogic->GetCustomerByID($OrderId);


$OrderItems = [];
$OrderItemLogic = new OrderItemLogic();
$OrderItems = (array)$OrderItemLogic->GetOrderItem($OrderId);


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





    $i=1;
    foreach($OrderItems as $orderItem)
    {
        $pdf->Cell(0, 10, 'Ticket '.$i .' Detail',0,1,'C');

        $pdf->Cell(0, 10, 'Event Name: ' .$orderItem->getEventID(),0,1,'L');
        $pdf->Cell(0, 10, 'Amount: ' .$orderItem->getAmount(),0,1,'L');
        $pdf->Cell(0, 10, 'Start Time: ' .date('l d F G i', strtotime($orderItem->getStartTime())),0,1,'L');

        $pdf->Ln(3);
        $i++;
    }


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
    $OutputPdf='Invoice/' . $customer->getLastName() . $customer->getCustomerID() . '.pdf';
}



$pdf->output($OutputPdf,"F");


// Settings
foreach ($Customers as $customer) {
    $name = $customer->getFirstName();
    $email = $customer->getEmail();
    $to = "$name <$email>";
    $from = "Haarlem Festival ";
    $subject = "Here are your tickets!";
    $mainMessage = "Hello, Thank you for ordering at Haarlem Festival. Here are your tickets!";
    $fileatt = $OutputPdf; //file location
    $fileatttype = "application/pdf";
    $fileattname = 'Ticket' . $customer->getLastName() . $customer->getCustomerID() . '.pdf'; //name that you want to use to send or you can use the same name
    $headers = "From: $from";

// File
    $file = fopen($fileatt, 'rb');
    $data = fread($file, filesize($fileatt));
    fclose($file);

// This attaches the file
    $semi_rand = md5(time());
    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
    $headers .= "\nMIME-Version: 1.0\n" .
        "Content-Type: multipart/mixed;\n" .
        " boundary=\"{$mime_boundary}\"";
    $message = "This is a multi-part message in MIME format.\n\n" .
        "--{$mime_boundary}\n" .
        "Content-Type: text/plain; charset=\"iso-8859-1\n" .
        "Content-Transfer-Encoding: 7bit\n\n" .
        $mainMessage . "\n\n";

    $data = chunk_split(base64_encode($data));
    $message .= "--{$mime_boundary}\n" .
        "Content-Type: {$fileatttype};\n" .
        " name=\"{$fileattname}\"\n" .
        "Content-Disposition: attachment;\n" .
        " filename=\"{$fileattname}\"\n" .
        "Content-Transfer-Encoding: base64\n\n" .
        $data . "\n\n" .
        "--{$mime_boundary}--\n";

// Send the email
    if (mail($to, $subject, $message, $headers)) {

        header('Location: ../View/Shopping_Cart_Order.php');

    } else {

        echo "There was an error sending the mail.";
    }

}
?>