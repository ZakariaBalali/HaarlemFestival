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

    function GetCombiEventsByName($ticketName1, $ticketName2)
    {
        $sql = "SELECT C.Event_ID, E.Price, C.TicketName FROM Event E INNER JOIN Event_Combi C ON E.Event_ID = C.Event_ID WHERE C.TicketName = '" . $ticketName1 . "' OR C.TicketName = '" . $ticketName2 . "'";
        $CombiEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $Event_ID = $row["Event_ID"];
                $Price = $row["Price"];
                $TicketName = $row["TicketName"];

                $Combi = new Combi($Event_ID, $Price, $TicketName);
                $CombiEvents[] = $Combi;
            }
            return $CombiEvents;
        } else {
            echo 'No Combi events found';
        }
    }
}

?>