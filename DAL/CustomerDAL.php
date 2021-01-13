<?php
require_once dirname(__FILE__) . '/../Model/Customer.php';
require_once dirname(__FILE__) . '/DbConnection.php';

class CustomerDAL
{
    private $connection;
    private $instance;

    //makes the connection to the database
    function __construct()
    {
        $this->instance = DbConnection::getInstance();
        $this->connection = $this->instance->getConnection();
    }

    function GetCustomerByOrderID($OrderID)
    {
        $sql = "SELECT C.Customer_ID, C.First_Name, C.Last_Name , C.Email, C.Phone_Number, O.Order_ID FROM Order O INNER JOIN Customer C ON  C.Customer_ID = O.Customer_ID WHERE Order_ID = '" . $OrderID . "'";
        $Customers = [];
        $result = mysqli_query($this->connection, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $CustomerID = $row["Customer_ID"];
                $FirstName = $row["First_Name"];
                $LastName = $row["Last_Name"];
                $Email = $row["Email"];
                $PhoneNumber=$row["Phone_Number"];
                

                $Customer = new Customer($CustomerID,$FirstName,$LastName, $Email, $PhoneNumber);
                $Customers[] = $Customer;
            }
            return $Customers;
        } else {
            echo 'No Customers found';
        }
    }
}

?>