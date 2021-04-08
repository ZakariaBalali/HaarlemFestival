<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
require('../Model/Historic.php');
require('HistoricLogic.php');
$historicLogic = new HistoricLogic();

require('../Model/Food.php');
require('FoodLogic.php');
$foodLogic = new FoodLogic();
session_start();

// Music isset
if (isset($_POST['AddToShoppingCartMusic'])) {
    CheckAmountFor3Tickets($_POST["amountArtist"], $_POST["artistID"], $_POST["amountAllAccessDay"], $_POST["allAccessDayID"], $_POST["amountAllAccessWeekend"], $_POST["allAccessWeekendID"]);
    header('Location: ../View/Shopping_Cart.php');
}

// Historic isset
if (isset($_POST['AddToShoppingCartHistoric'])) {

    if(!$_POST["normalTicketAmount"]=="" || !$_POST["familyTicketAmount"]==""){
        // date and time merged
        $dateTime = $_POST["selectDate"] . ' ' . $_POST["selectTime"];

        $normalTicket = $historicLogic->GetTicket($dateTime, $_POST["language"], "normal ticket");
        $familyTicket = $historicLogic->GetTicket($dateTime, $_POST["language"], "family ticket");

        CheckAmountFor2Tickets($_POST["normalTicketAmount"], $normalTicket->getEvent_ID(), $_POST["familyTicketAmount"], $familyTicket->getEvent_ID());
        header('Location: ../View/Shopping_Cart.php');
    }
    else{
        //return back to previous page
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit;
    }
}


// Food isset
if (isset($_POST['AddToShoppingCartFood'])) 
{
    $reservation = $foodLogic->GetReservation($_POST["restaurant"], $_POST["time"]);
    CheckAmountForFoodTickets($reservation->getEvent_ID(), $_POST["amountAdultTicket"], $_POST["amountChildTicket"]);
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
    //Checks if there is a comment
    if(isset($_POST['comments'])){
        $comment = $_POST['comments'];
    }
    else{
        $comment = "none";
    }
    $eventDAL = new EventDAL();
    $events = (array)$eventDAL->GetEventByID($EventID);
    //If there isn't a session, make one and add to it
    if (!isset($_SESSION['Products']) || empty($_SESSION['Products'])) {
        foreach ($events as $event) {
            $_SESSION['products'] = array();
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Btw' => $event->getBtw(), 'Amount' => $Amount, 'Comment' => $comment);

        }

    } //Use existing session to add to
    else {
        //checks if item has already been added
        foreach ($_SESSION['Products'] as $Product) {
            if ($Product['EventID'] == $EventID) {
                $Amount += $Product['Amount'];
            }
        }
        foreach ($events as $event) {
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Btw' => $event->getBtw(),  'Amount' => $Amount,'Comment' => $comment);

        }
    }

    $_SESSION['Products'][$EventID] = $cart;

    $_SESSION['last_login'] = time();

    // Prevent session hijacking
    function last_login_is_recent() {
      $recent_limit = 60 * 60 * 24 * 1; // 1 day
      if(!isset($_SESSION['last_login'])) { return false; }
      return (($_SESSION['last_login'] + $recent_limit) >= time());
    }
}


?>
