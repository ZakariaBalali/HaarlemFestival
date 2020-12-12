<?php
require_once dirname(__FILE__) . '/../Model/Event.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class EventDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetEventByID($Event_ID)
    {
        $sql = "SELECT Event_ID, EventName, ProductName , StartTime, EndTime, Seats, Price, Btw FROM Event WHERE Event_ID = '$Event_ID'";
        $Events = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $Event_ID = $row["Event_ID"];
                $EventName = $row["EventName"];
                $ProductName = $row["ProductName"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];
                $Btw = $row["Btw"];
                $StartTime = $row["StartTime"];
                $EndTime = $row = ["EndTime"];

                $Event = new Event($Event_ID, $EventName, $ProductName, $StartTime, $EndTime, $Seats, $Price, $Btw);
                $Events[] = $Event;
            }
            return $Events;
        } else {
            echo 'No events found';
        }
    }
}

?>