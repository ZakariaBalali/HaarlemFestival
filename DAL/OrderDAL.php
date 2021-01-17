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
        $sql = "SELECT Order_ID FROM `Order` WHERE Order_ID=(SELECT max(Order_ID) FROM `Order`)";
        $Orders = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $OrderID = $row["Order_ID"];

                $Order = new Order($OrderID);
                $Orders[] = $Order;
            }
            return $Orders;
        } else {
            echo 'No Customers found';
        }
    }
}

?>