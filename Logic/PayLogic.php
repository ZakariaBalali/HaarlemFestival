<?php
require_once dirname(__FILE__) . '/../Logic/mollie/vendor/autoload.php';

$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("test_kWeW5tjftHhThty23qAtNeaDyQERjC");

$amount = $_POST["amount"];
$description = "test";
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "$amount"

    ],
    "description" => "$description",
    "redirectUrl" => "http://chocomel.infhaarlem.nl/View/Shopping_Cart_Order.php",
    "webhookUrl" => "http://chocomel.infhaarlem.nl/Logic/Webhook.php",

]);

header("Location: " . $payment->getCheckoutUrl(), true, 303);
?>