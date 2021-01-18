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
    function GetOrderItem($OrderID)
    {
        $sql = "SELECT E.StartTime, E.EventName ,E.ProductName, E.Price, O.Event_ID, O.Order_ID, O.Amount FROM Event E INNER JOIN Order_Item O ON E.Event_ID = O.Event_ID WHERE Order_ID = '" . $OrderID . "'";
        $OrderItems = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $StartTime = $row["StartTime"];
                $EventName = $row["ProductName"];
                $Price = $row["Price"];
                $Event_ID=$row["Event_ID"];
                $OrderID = $row["Order_ID"];
                $Amount = $row["Amount"];

     

                $OrderItem = new OrderItem($OrderID,$EventName,$Amount,$Price,$Event_ID,$StartTime);
                $OrderItems[] = $OrderItem;
            }
            return  $OrderItems;
        } else {
            echo 'No Dance events found';
        }
    }

}

?>