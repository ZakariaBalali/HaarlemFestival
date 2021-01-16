<?php
require_once dirname(__FILE__) . '/../Model/Food.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class FoodDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetFoodEventStart($Reservation)
    {
        $sql = "SELECT E.StartTime FROM Event E WHERE E.EventName = 'Food' AND E.ProductName = '" . $Reservation . "' ORDER BY E.StartTime ASC";
        $FoodTimes = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {               
                $StartTime = $row["StartTime"];
               

                $Food = new Event($StartTime);
                $FoodTimes[] = $Food;
            }
            return $FoodTimes;

        } else {
            echo 'No Starttimes found';
        }
    }
}

?>