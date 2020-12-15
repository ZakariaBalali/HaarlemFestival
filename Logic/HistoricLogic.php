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
    function GetAllHistoricTour($startDay, $endDay, $Language)
    {
        try{
            return $this->jazzDAL->GetProgramByDayAndLanguage($startDay, $endDay, $Language);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
        
    }
}
