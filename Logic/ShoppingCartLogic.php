<?php
require_once dirname(__FILE__) . '/../DAL/EventDAL.php';
session_start();

class ShoppingCartLogic
{
    private $eventDAL;
    private $amount;

    function __construct()
    {
        $this->eventDAL = new EventDAL();

        checkAmountArtist($_POST["amountArtist"], $_POST["artistID"]);
    }

    function checkAmountArtist($amountArtist, $artistID)
    {
        if ($amountArtist > 0) {
            return $this->eventDAL->getEventByID($artistID);
            ?>Artist ticket:<br><?php
            echo "test";
        }
    }

}

?>
<html>
<body>
Artist ticket:<br>
Amount <?php echo $_POST["amountArtist"]; ?>x<br>
Product: <?php echo $_POST["artistID"]; ?><br>
<br>
All Access Day ticket: <br>
Amount <?php echo $_POST["amountAllAccessDay"]; ?>x<br>
Product: <?php echo $_POST["allAccessDayID"]; ?><br>
<br>
All Access Weekend ticket: <br>
Amount <?php echo $_POST["amountAllAccessWeekend"]; ?>x<br>
Product: <?php echo $_POST["allAccessWeekendID"]; ?><br>


</body>
</html>