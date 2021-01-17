<?php
require_once dirname(__FILE__) . '/../Model/Jazz.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class JazzDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetJazzEventsByDay($TimeStartDay, $TimeEndDay)
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE E.EventName = 'Jazz' AND E.StartTime >= '" . $TimeStartDay . "' AND StartTime < '" . $TimeEndDay . "' ORDER BY E.StartTime ASC";
        $JazzEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $BandName = $row["BandName"];
                $Description = $row["Description"];
                $Image = $row["Image"];
                $Location = $row["Location"];

                $Jazz = new Jazz($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price);
                $JazzEvents[] = $Jazz;
            }
            return $JazzEvents;
        } else {
            echo 'No Jazz events found';
        }
    }

    function GetJazzEventById($Event_ID)
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E 
        INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE J.Event_ID = $Event_ID";
        $JazzEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $BandName = $row["BandName"];
                $Description = $row["Description"];
                $Image = $row["Image"];
                $Location = $row["Location"];

                $Jazz = new Jazz($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price);
                return $Jazz;
            }
            return $JazzEvents;
        } else {
            echo 'No Jazz events found';        
        }
    }
    
    function SaveDescription($jazzEvent){
        $description = $jazzEvent->getDescription();
        $id = $jazzEvent->getEvent_ID();
        $sql = "UPDATE Event_Jazz SET Description = '$description' WHERE Event_ID = $id";
        mysqli_query($this->connection, $sql);
    }

    //for program
    function GetAllJazzTickets()
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE E.EventName = 'Jazz' ORDER BY E.StartTime ASC";
        $JazzEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $BandName = $row["BandName"];
                $Description = $row["Description"];
                $Image = $row["Image"];
                $Location = $row["Location"];

                $Jazz = new Jazz($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price);
                $JazzEvents[] = $Jazz;
            }
            return $JazzEvents;
        } else {
            echo 'No Jazz events found';
        }
    }
}

?>