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

    //for program
    function GetAllFoodEvents()
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, F.Event_ID, F.RestaurantName, F.Stars, F.Description, F.Image, F.Cuisine FROM Event E INNER JOIN Event_Food F ON E.Event_ID = F.Event_ID WHERE E.EventName = 'Food' AND E.ProductName = 'Reservation' ORDER BY E.StartTime ASC";
        $FoodEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $RestaurantName = $row["RestaurantName"];
                $Stars = $row["Stars"];
                $Description = $row["Description"];
                $Image = $row["Image"];
                $Cuisine = $row["Cuisine"];

                $Food = new Food($Event_ID,$RestaurantName, $Stars, $Description, $Image, $Cuisine, $StartTime, $EndTime, $Price);
                $FoodEvents[] = $Food;
            }
            return $FoodEvents;
        } else {
            echo 'No Food events found';
        }
    }
}

?>