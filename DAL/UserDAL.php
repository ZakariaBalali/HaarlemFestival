<?php
require_once dirname(__FILE__) . '/../Model/User.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class UserDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetUserByOrderNumber($OrderNumber)
    {
        $sql = "SELECT user WHERE OrderNumber = '" . $OrderNumber . "'";
        $Users = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $FirstName = $row["FirstName"];
                $LastName = $row["LastName"];
                $Email = $row["Email"];
                $OrderNumber=$row["OrderNumber"];
                

                $User = new User($FirstName,$LastName, $Email, $OrderNumber);
                $Users[] = $User;
            }
            return $Users;
        } else {
            echo 'No users found';
        }
    }
}

?>