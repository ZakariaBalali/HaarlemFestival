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
    function GetCustomerByID($OrderID)
    {
        return $this->customerDAL->GetCustomersByID($OrderID);
    }

    function SetCustomer($FirstName, $LastName, $Email, $Phone)
    {
        return $this->customerDAL->SetCustomer($FirstName, $LastName, $Email, $Phone);
    }

    function GetHighestCustomerID(){
        return $this->customerDAL->GetMaxCustomerID();
    }

}