<?php
require_once dirname(__FILE__) . '/../DAL/OrderItemDAL.php';

class OrderItemLogic
{
    private $orderItemDAL;

    function __construct()
    {
        $this->orderItemDAL = new OrderItemDAL();
    }


    function SetOrderItem($OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime)
    {
        try{
            return $this->orderItemDAL->SetOrderItem($OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function GetOrderItem($OrderID)
    {
        try{
            return $this->orderItemDAL->GetOrderItem($OrderID);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }


}