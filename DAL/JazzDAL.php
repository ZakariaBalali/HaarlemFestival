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

    function GetAllJazzEvents()
    {
        $sql = "SELECT E.StartTime, E.EndTime , E.Price, J.BandName, J.Description, J.Image, J.Location FROM Event E INNER JOIN Event_Jazz J ON E.Event_ID = J.Event_ID WHERE E.StartTime >='2018-07-26 00:00:00' AND StartTime <'2018-07-27 00:00:00'  ORDER BY E.StartTime ASC";
        $JazzEvents = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EndTime = $row["EndTime"];
                $Price = $row["Price"];
                $BandName = $row["BandName"];
                $Description = $row["Description"];
                $Image = $row["Image"];
                $Location = $row["Location"];

                $Jazz = new Jazz($BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price);
                $JazzEvents[] = $Jazz;
            }
            return $JazzEvents;
        } else {
            echo 'Error, no Jazz events found';
        }
    }
}

?>