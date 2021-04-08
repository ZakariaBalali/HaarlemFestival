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
        //prepared statement
        $stmt = $this->connection->prepare("SELECT Event_ID, EventName, ProductName , StartTime, EndTime, Seats, Price, Btw FROM Event WHERE Event_ID = ?");
        $stmt->bind_param("i", $Event_ID);
        $stmt->execute();
		$result = $stmt->get_result();
		$stmt-> bind_result($Event_ID, $EventName, $ProductName, $StartTime, $EndTime, $Seats, $Price, $Btw); 
        while ($row = $result->fetch_assoc()) {

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
    }
}

?>