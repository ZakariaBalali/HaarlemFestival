<?php
require_once dirname(__FILE__) . '/../Model/Combi.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class CombiDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetCombiEventsByDay($TimeStartDay, $TimeEndDay)
    {
        $sql = "SELECT C.TicketName FROM Event E INNER JOIN Event_Combi C ON E.Event_ID = C.Event_ID WHERE E.EventName = 'Combi' AND E.StartTime >= '" . $TimeStartDay . "' AND StartTime < '" . $TimeEndDay . "' ORDER BY E.EndTime ASC";
        $CombiEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $TicketName = $row["TicketName"];

                $Combi = new Combi($TicketName);
                $CombiEvents[] = $Combi;
            }
            return $CombiEvents;
        } else {
            echo 'No Combi events found';
        }
    }
}

?>