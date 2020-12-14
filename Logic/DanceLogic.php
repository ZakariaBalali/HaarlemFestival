<?php
require_once dirname(__FILE__) . '/../DAL/DanceDAL.php';

class DanceLogic
{
    private $danceDAL;

    function __construct()
    {
        $this->danceDAL = new DanceDAL();
    }

//Gets functions from DAL layer
    function GetAllDanceEvents($TimeStartDay, $TimeEndDay)
    {
        return $this->danceDAL->GetDanceEventsByDay($TimeStartDay, $TimeEndDay);
    }
}
