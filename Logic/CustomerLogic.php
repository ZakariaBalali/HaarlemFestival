<?php
require_once dirname(__FILE__) . '/../DAL/CustomerDAL.php';

class CustomerLogic
{
    private $customerDAL;

    function __construct()
    {
        $this->customerDAL = new CustomerDAL();
    }

//Gets functions from DAL layer
    function GetCustomerByOrderID($OrderID)
    {
        return $this->customerDAL->GetCustomerByOrderID($OrderID);
    }
}
