<?php
require_once dirname(__FILE__) . '/../Model/Historic.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class HistoricDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetAllHistoricTours()
    {
        //prepared statement
        $stmt = $this->connection->prepare("SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.ProductName = 'normal ticket' ORDER BY E.StartTime ASC");
	    $stmt->execute();
	    $result = $stmt->get_result(); 
        while ($row = $result->fetch_assoc()) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $historicTour = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
                $historicProgram[] = $historicTour; 
        }
        return $historicProgram;
    }

    function GetTicket($startTime, $language, $ticketName)
    {
        //prepared statement
        $stmt = $this->connection->prepare("SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime = ? AND H.Language = ? AND E.ProductName = ?");
        $stmt->bind_param("sss", $startTime, $language, $ticketName );
        $stmt->execute();
	    $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $historicTour = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
        }
        return $historicTour;

        }
    }
?>