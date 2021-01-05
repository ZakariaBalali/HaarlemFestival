<?php
require_once dirname(__FILE__) . '/../DAL/UserDAL.php';

class UserLogic
{
    private $userDAL;

    function __construct()
    {
        $this->userDAL = new UserDAL();
    }

//Gets functions from DAL layer
    function GetUserByOrderNumber($OrderNumber)
    {
        return $this->userDAL->GetUserByOrderNumber($OrderNumber);
    }
}
