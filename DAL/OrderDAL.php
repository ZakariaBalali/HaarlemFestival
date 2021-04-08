<?php
require_once dirname(__FILE__) . '/../Model/Order.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class OrderDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }



    function SetOrder($CustomerID, $OrderDate, $Totalprice)
    {
        $stmt = $this->connection->prepare("INSERT INTO `Order`(Customer_ID, OrderDate, TotalPrice) VALUES(?,?,?)");
        $stmt->bind_param("isi", $CustomerID, $OrderDate, $Totalprice);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    function GetMaxOrderID()
    {
        //prepared statement
        $stmt = $this->connection->prepare("SELECT Order_ID FROM `Order` WHERE Order_ID=(SELECT max(Order_ID) FROM `Order`)");
		$stmt->execute();
		$result = $stmt->get_result();
		$stmt-> bind_result($OrderID); 
        while ($row = $result->fetch_assoc()) {
                $OrderID = $row["Order_ID"];

                $Order = new Order($OrderID);
                $Orders[] = $Order;
        }
        return $Orders;
    }
}

?>