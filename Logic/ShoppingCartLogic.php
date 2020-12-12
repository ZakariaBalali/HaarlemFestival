<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
session_start();

class ShoppingCartLogic
{
    private $eventDAL;

    function __construct($amountArtist, $artistID, $amountAllAccessDay, $allAccessDayID, $amountAllAccessWeekend, $allAccessWeekendID)
    {
        self::checkAmount($amountArtist, $artistID, $amountAllAccessDay, $allAccessDayID, $amountAllAccessWeekend, $allAccessWeekendID);
    }

    function checkAmount($amountArtist, $artistID, $amountAllAccessDay, $allAccessDayID, $amountAllAccessWeekend, $allAccessWeekendID)
    {
        $eventDAL = new EventDAL();

        if ($amountArtist > 0) {
            $events = (array)$eventDAL->GetEventByID($artistID);

            foreach ($events as $event) {
                echo "Event ID: ";
                echo $event->getEventID(); ?> <br> <?php
                echo $event->getEventName(); ?> <br> <?php
                echo $event->getProductName(); ?> <br> Amount: <?php
                echo $amountArtist; ?> <br> <br><?php
            }
        }
        if ($amountAllAccessDay > 0) {
            $events = (array)$eventDAL->GetEventByID($allAccessDayID);

            foreach ($events as $event) {
                echo "Event ID: ";
                echo $event->getEventID(); ?> <br> <?php
                echo $event->getEventName(); ?> <br> <?php
                echo $event->getProductName(); ?> <br> Amount: <?php
                echo $amountAllAccessDay; ?> <br> <br><?php
            }
        }
        if ($amountAllAccessWeekend > 0) {
            $events = (array)$eventDAL->GetEventByID($allAccessWeekendID);

            foreach ($events as $event) {
                echo "Event ID: ";
                echo $event->getEventID(); ?> <br> <?php
                echo $event->getEventName(); ?> <br> <?php
                echo $event->getProductName(); ?> <br> Amount: <?php
                echo $amountAllAccessWeekend; ?> <br> <br> <?php
            }
        }
    }

}

$object1 = new ShoppingCartLogic($_POST["amountArtist"], $_POST["artistID"], $_POST["amountAllAccessDay"], $_POST["allAccessDayID"], $_POST["amountAllAccessWeekend"], $_POST["allAccessWeekendID"]);

?>

</body>
</html>