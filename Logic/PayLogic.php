<?php
require_once dirname(__FILE__) . '/../Logic/mollie/vendor/autoload.php';
require_once dirname(__FILE__) . '/../Logic/CustomerLogic.php';
require_once dirname(__FILE__) . '/../Logic/OrderLogic.php';
require_once dirname(__FILE__) . '/../Logic/OrderItemLogic.php';
session_start();
if (isset($_POST['ConfirmButton'])) {
    //Puts customer into the database and sanitizes data
    $customerLogic = new CustomerLogic();
    $firstName = filter_var($_POST["firstName"], FILTER_SANITIZE_STRING);
    $lastName = filter_var($_POST["lastName"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);

    $customerLogic->SetCustomer($firstName, $lastName, $email, $phone);

    $Customers = (array)$customerLogic->GetHighestCustomerID();
    $CustomerID = $Customers[0]->getCustomerID();

    $_SESSION["Customer"] = array();

    $customer = array('CustomerID' => $Customers[0]->getCustomerID(), 'FirstName' => $_POST["firstName"],
        'LastName' => $_POST["lastName"], 'Email' => $_POST["email"], 'Phone' => $_POST["phone"]);

    $_SESSION['Customer'][$CustomerID] = $customer;

    //Sets the Order in the database
    SetOrder($CustomerID, date('Y-m-d'), $_POST["amount"]);

}

function SetOrder($CustomerID, $DateOrder, $Amount)
{
    $orderLogic = new OrderLogic();
    $orderLogic->SetOrder($CustomerID, $DateOrder, $Amount);

    $Orders = (array)$orderLogic->GetHighestOrderID();
    $_SESSION["OrderID"] = $Orders[0]->getOrderID();

    SetOrderItem();
}

function SetOrderItem()
{
    $orderItemLogic = new OrderItemLogic();


    foreach ($_SESSION['Products'] as $item) {

        $orderItemLogic->SetOrderItem($_SESSION["OrderID"], $item['EventID'], $item['Amount'], $item['Price'], $item['Btw'], $item['StartTime']);

    }

    CallMollieAPI();


}

function CallMollieAPI()
{

    $mollie = new \Mollie\Api\MollieApiClient();
    $mollie->setApiKey("test_kWeW5tjftHhThty23qAtNeaDyQERjC");

    $amount = $_POST["amount"];
    $description = "Haarlem Festival";
    $payment = $mollie->payments->create([
        "amount" => [
            "currency" => "EUR",
            "value" => "$amount"

        ],
        "description" => "$description",
        "redirectUrl" => "http://chocomel.infhaarlem.nl/View/MakePdf.php",
        "webhookUrl" => "http://chocomel.infhaarlem.nl/Logic/Webhook.php",

    ]);
    header("Location: " . $payment->getCheckoutUrl(), true, 303);
}

?>
