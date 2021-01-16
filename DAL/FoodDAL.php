<?php
require_once dirname(__FILE__) . '/../Model/Food.php';
require_once dirname(__FILE__) . '/../Model/Event.php';
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

    function GetFoodTimes($ProductName)
    {
        $sql = "SELECT E.StartTime, E.EndTime, E.Price FROM Event E WHERE E.EventName = 'Food' AND E.ProductName = '" . $ProductName . "' ORDER BY E.StartTime ASC";
        $FoodTimes = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];

                $Food = new Food($StartTime, $EndTime, $Price);
                $FoodTimes[] = $Food;
            }
            return $FoodTimes;
        } else {
            echo 'No Food times found';
        }
    }

}

?>