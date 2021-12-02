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
        try{
            return $this->jazzDAL->GetJazzEventsByDay($TimeStartDay, $TimeEndDay);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    
    function GetAllJazzTickets()
    {
        try{
            return $this->jazzDAL->GetAllJazzTickets();
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
