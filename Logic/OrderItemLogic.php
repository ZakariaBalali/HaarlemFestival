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
        return $this->orderItemDAL->SetOrderItem($OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime);
    }


}