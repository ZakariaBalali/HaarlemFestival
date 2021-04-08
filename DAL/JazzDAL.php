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
        //prepared statement
        $stmt = $this->connection->prepare("SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE E.EventName = 'Jazz' AND E.StartTime >= ? AND StartTime < ? ORDER BY E.StartTime ASC");
        $stmt->bind_param("ss", $TimeStartDay, $TimeEndDay);
        $stmt->execute();
		$result = $stmt->get_result();
		$stmt-> bind_result($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price); 
        while ($row = $result->fetch_assoc()) {

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
    }

    function GetJazzEventById($Event_ID)
    {
        //prepared statement
        $stmt = $this->connection->prepare("SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E 
        INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE J.Event_ID = ?");
        $stmt->bind_param("i", $Event_ID);
        $stmt->execute();
		$result = $stmt->get_result();
		$stmt-> bind_result($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price); 
        while ($row = $result->fetch_assoc()) {
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
        //prepared statement
        $stmt = $this->connection->prepare("SELECT E.StartTime, E.EndTime , E.Price, J.Event_ID, J.BandName, J.Description, J.Image, J.Location FROM Event E INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE E.EventName = 'Jazz' ORDER BY E.StartTime ASC");
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt-> bind_result($Event_ID,$BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price); 
        while ($row = $result->fetch_assoc()) {

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

    }
}

?>