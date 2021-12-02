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
        try{
            return $this->orderDAL->SetOrder($CustomerID, $OrderDate, $TotalPrice);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function GetHighestOrderID()
    {
        try{
            return $this->orderDAL->GetMaxOrderID();
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

}