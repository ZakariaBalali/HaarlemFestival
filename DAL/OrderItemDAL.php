<?php
require_once dirname(__FILE__) . '/../Model/OrderItem.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class OrderItemDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }



    function SetOrderItem($OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime)
    {
        $stmt = $this->connection->prepare("INSERT INTO `Order_Item`(Order_ID, Event_ID, Amount, UnitPrice, UnitBtw, StartTime) VALUES(?,?,?,?,?,?)");
        $stmt->bind_param("iiidds", $OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

}

?>