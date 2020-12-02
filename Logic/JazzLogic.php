<?php
require_once dirname(__FILE__) . '/../DAL/JazzDAL.php';

class JazzLogic
{
    private $jazzDAL;

    function __construct()
    {
        $this->jazzDAL = new JazzDAL();
    }

//Gets functions from DAL layer
    function GetAllJazzEvents($TimeStartDay, $TimeEndDay)
    {
        return $this->jazzDAL->GetJazzEventsByDay($TimeStartDay, $TimeEndDay);
    }
}
