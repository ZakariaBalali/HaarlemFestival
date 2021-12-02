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
        try{
            return $this->customerDAL->GetCustomersByID($OrderID);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        } 
    }

    function SetCustomer($FirstName, $LastName, $Email, $Phone)
    {
        try{
            return $this->customerDAL->SetCustomer($FirstName, $LastName, $Email, $Phone);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function GetHighestCustomerID()
    {
        try{
            return $this->customerDAL->GetMaxCustomerID();
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

}