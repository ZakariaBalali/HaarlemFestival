<?php
require_once dirname(__FILE__) . '/../DAL/OrderDAL.php';

class OrderLogic
{
    private $orderDAL;

    function __construct()
    {
        $this->orderDAL = new OrderDAL();
    }


    function SetOrder($CustomerID, $OrderDate, $TotalPrice)
    {
        return $this->orderDAL->SetOrder($CustomerID, $OrderDate, $TotalPrice);
    }

    function GetHighestOrderID()
    {
        return $this->orderDAL->GetMaxOrderID();
    }

}