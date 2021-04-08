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
    function GetAllHistoricTours(){
        try{
            return $this->historicDAL->GetAllHistoricTours();
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
}
