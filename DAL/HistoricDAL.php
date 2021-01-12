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

    function GetProgramByDayAndLanguage($startDay, $endDay, $Language)
    {
        $sql = "SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime >= '" . $startDay . "' and E.StartTime <= '" . $endDay. "' AND H.Language = '" . $Language. "' AND E.ProductName = 'normal ticket' ORDER BY E.StartTime ASC";
        $HistoricProgram = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $Historic = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
                $HistoricProgram[] = $Historic;
            }
            return $HistoricProgram;

        } else {
            echo 'No Historic tour found';
        }
    }
    function GetProgramByDay($startDay, $endDay)
    {
        $sql = "SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime >= '" . $startDay . "' and E.StartTime <= '" . $endDay. "' AND E.ProductName = 'normal ticket' ORDER BY E.StartTime ASC";
        $HistoricProgram = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $Historic = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
                $HistoricProgram[] = $Historic;
            }
            return $HistoricProgram;

        } else {
            echo 'No Historic tour found';
        }
    }
    function GetTicket($startTime, $language, $ticketName)
    {
        /*$stmt = $this->connection->prepare("SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime = ? AND H.Language = ? AND E.ProductName = ?");
        $stmt->bind_param('sss', $startTime, $language, $ticketName );
        $stmt->execute();
        $result = $stmt->get_result();
        //return mysqli_fetch_assoc($result);
        return $result;*/

        $sql = "SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime = '" . $startTime . "' AND H.Language = '" . $language . "' AND E.ProductName = '" . $ticketName . "'";
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $Historic = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
            }
            return $Historic;

        } else {
            echo 'No ticket found';
        }
    }

    function GetTicketByDay($startTime)
    {
        $sql = "SELECT E.Event_ID, E.ProductName, E.StartTime, E.EndTime, E.Price, E.Seats, H.Language FROM Event E INNER JOIN Event_Historic H ON E.Event_ID = H.Event_ID WHERE E.EventName = 'Historic' AND E.StartTime = '" . $startTime . "' AND E.ProductName = 'normal ticket'";
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {

                $Event_ID=$row["Event_ID"];
                $Language = $row["Language"];
                $ProductName = $row["ProductName"];
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Seats = $row["Seats"];
                $Price = $row["Price"];

                $Historic = new Historic($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price);
            }
            return $Historic;

        } else {
            echo 'No ticket found';
        }
    }
}

?>