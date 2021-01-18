<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
require('../Model/Historic.php');
require('HistoricLogic.php');
$historicLogic = new HistoricLogic();

require('../Model/Food.php');
require('FoodLogic.php');
$foodLogic = new FoodLogic();
session_start();


if (isset($_POST['AddToShoppingCartMusic'])) {
    CheckAmountFor3Tickets($_POST["amountArtist"], $_POST["artistID"], $_POST["amountAllAccessDay"], $_POST["allAccessDayID"], $_POST["amountAllAccessWeekend"], $_POST["allAccessWeekendID"]);
    header('Location: ../View/Shopping_Cart.php');
}

//historic
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
if (isset($_POST['AddToShoppingCartFood'])) {

    //dit zijn test zinnen. hiermee kan je echo en kijken of de value komt enz. deze 3 values heb je nodig om het te kunne toevoegen aan shoppingcart. je hebt een id nodig die haal je om met getreservation. en aantal adults en aantal kinderen
    echo "<span style='color:black;font-size: 5em;'>".$_POST["time"]."</span>";
    echo "<span style='color:black;font-size: 5em;'>".$_POST["amountAdultTicket"]."</span>";
    echo "<span style='color:black;font-size: 5em;'>". $_POST["amountChildTicket"]."</span>";

    $reservation = $foodLogic->GetReservation("Restaurant Mr. & Mrs.", "2018-07-26 19:30:00");
    echo print_r($reservation);
    //$reservation = $foodLogic->GetReservation("Restaurant Mr. & Mrs.", $_POST["time"]);
    //de bovenste zin werkt helemaal (is nu in comment omdat datum niet klopt die je ophaalt. het moet 2018 zijn), query klopt. alleen kan het fout gaan bij het ophalen van de tijdstippen omdat je nog de oude data erin hebt. nieuwe data heeft jaartal 2018 en je oude data is 2021
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

    $eventDAL = new EventDAL();
    $events = (array)$eventDAL->GetEventByID($EventID);
    //If there isn't a session, make one and add to it
    if (!isset($_SESSION['Products']) || empty($_SESSION['Products'])) {
        foreach ($events as $event) {
            $_SESSION['products'] = array();
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Btw' => $event->getBtw(), 'Amount' => $Amount);

        }

    } //Use existing session to add to
    else {
        foreach ($events as $event) {
            $cart = array('EventID' => $EventID, 'EventName' => $event->getEventName(),
                'ProductName' => $event->getProductName(), 'StartTime' => $event->getStartTime(), 'Price' => $event->getPrice(), 'Btw' => $event->getBtw(),  'Amount' => $Amount);

        }
    }

    $_SESSION['Products'][$EventID] = $cart;
}

?>
