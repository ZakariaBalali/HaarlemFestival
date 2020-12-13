<?php
require_once dirname(__FILE__) . '/../Model/Dance.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class DanceDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetDanceEventsByDay($TimeStartDay, $TimeEndDay)
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, D.Event_ID, D.ArtistName, D.Duration, D.Image, D.Location FROM Event E INNER JOIN Event_Dance D ON E.Event_ID = D.Event_ID WHERE E.EventName = 'Dance' AND E.StartTime >= '" . $TimeStartDay . "' AND StartTime < '" . $TimeEndDay . "' ORDER BY E.StartTime ASC";
        $DanceEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $ArtistName = $row["ArtistName"];
                $Duration = $row["Duration"];
                $Image = $row["Image"];
                $Location = $row["Location"];

                $Dance = new Dance($Event_ID,$ArtistName, $Duration, $Location, $Image, $StartTime, $EndTime, $Price);
                $DanceEvents[] = $Dance;
            }
            return $DanceEvents;
        } else {
            echo 'No Dance events found';
        }
    }
}

?>