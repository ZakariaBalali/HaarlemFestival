<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
session_start();


if (isset($_POST['AddToShoppingCartMusic'])) {
    CheckAmountFor3Tickets($_POST["amountArtist"], $_POST["artistID"], $_POST["amountAllAccessDay"], $_POST["allAccessDayID"], $_POST["amountAllAccessWeekend"], $_POST["allAccessWeekendID"]);
    header('Location: ../View/Shopping_Cart.php');
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
