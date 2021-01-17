<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
require('../Model/Historic.php');
require('HistoricLogic.php');
$historicLogic = new HistoricLogic();

require('../Model/Food.php');
require('FoodLogic.php');
$food = new Food();
session_start();


if (isset($_POST['AddToShoppingCartMusic'])) {
    CheckAmountFor3Tickets($_POST["amountArtist"], $_POST["artistID"], $_POST["amountAllAccessDay"], $_POST["allAccessDayID"], $_POST["amountAllAccessWeekend"], $_POST["allAccessWeekendID"]);
    header('Location: ../View/Shopping_Cart.php');
}

//historic
if (isset($_POST['AddToShoppingCartHistoric'])) {

    // date and time merged
    $dateTime = $_POST["selectDate"] . ' ' . $_POST["selectTime"];
    
    //$ticketarray= $historicLogic->GetTicket($dateTime, $_POST["language"], "family ticket");
    $normalTicket = $historicLogic->GetTicket($dateTime, $_POST["language"], "normal ticket");
    $familyTicket = $historicLogic->GetTicket($dateTime, $_POST["language"], "family ticket");
    //historic($_POST["selectDate"], $_POST["selectTime"], $_POST["language"], $_POST["normalTicketAmount"], $_POST["familyTicketAmount"]);
    CheckAmountFor2Tickets($_POST["normalTicketAmount"], $normalTicket->getEvent_ID(), $_POST["familyTicketAmount"], $familyTicket->getEvent_ID());
    header('Location: ../View/Shopping_Cart.php');
}

// Food isset
if (isset($_POST['AddToShoppingCartFood'])) {
    $TicketID = $_POST["time"];
    $TicketID = $food->getEvent_ID();
    CheckAmountForFoodTickets($TicketID, $_POST["amountAdultTicket"], $_POST["amountChildTicket"]);
    header('Location: ../View/Shopping_Cart.php');
}

// Check for food tickets
function CheckAmountForFoodTickets($ReservationID, $amountAdultTicket, $amountChildTicket)
{
    if ($amountAdultTicket > 0) {
        AddToSession($ReservationID, $amountAdultTicket);
    }
    if ($amountChildTicket > 0) {
        AddToSession($ReservationID, $amountChildTicket);
    }
}

//Check amount of the tickets and calls add to session function when the amount is more than one
function CheckAmountFor3Tickets($amountArtist, $artistID, $amountAllAccessDay, $allAccessDayID, $amountAllAccessWeekend, $allAccessWeekendID)
{

    if ($amountArtist > 0) {
        AddToSession($artistID, $amountArtist);
    }
    if ($amountAllAccessDay > 0) {
        AddToSession($allAccessDayID, $amountAllAccessDay);
    }
    if ($amountAllAccessWeekend > 0) {
        AddToSession($allAccessWeekendID, $amountAllAccessWeekend);
    }

}

//for historic tickets 
function CheckAmountFor2Tickets($amountNormalTicket, $normalTicketID, $amountFamilyTicket, $familyTicketID)
{

    if ($amountNormalTicket > 0) {
        AddToSession($normalTicketID, $amountNormalTicket);
    }
    if ($amountFamilyTicket > 0) {
        AddToSession($familyTicketID, $amountFamilyTicket);
    }

}

//Adds The item to a session
function AddToSession($EventID, $Amount)
{

    $eventDAL = new EventDAL();
    $events = (array)$eventDAL->GetEventByID($EventID);
    //If there isn't a session, make one and add to it
    if (!isset($_SESSION['Products']) || empty($_SESSION['Products'])) {
        foreach ($events as $event) {
            $_SESSION['products'] = array();
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Amount' => $Amount);

        }

    } //Use existing session to add to
    else {
        foreach ($events as $event) {
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Amount' => $Amount);

        }
    }

    $_SESSION['Products'][$EventID] = $cart;
}
?>
