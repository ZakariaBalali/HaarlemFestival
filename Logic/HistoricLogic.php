<?php
require_once dirname(__FILE__) . '/../DAL/HistoricDAL.php';

class HistoricLogic
{
    private $historicDAL;

    function __construct()
    {
        $this->historicDAL = new HistoricDAL();
    }

//Gets functions from DAL layer
    function GetAllHistoricTour($startDay, $endDay, $Language){
        try{
            return $this->historicDAL->GetProgramByDayAndLanguage($startDay, $endDay, $Language);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }
    function GetProgramByDay($startDay, $endDay){
        try{
            return $this->historicDAL->GetProgramByDay($startDay, $endDay);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function GetTicket($startTime, $language, $ticketName){
        try{
            return $this->historicDAL->GetTicket($startTime, $language, $ticketName);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    function GetTicketByDay($startTime){
        try{
            return $this->historicDAL->GetTicketByDay($startTime);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
