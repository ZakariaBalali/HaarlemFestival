<?php
require_once dirname(__FILE__) . '/../DAL/FoodDAL.php';

class FoodLogic
{
    private $foodDAL;

    function __construct()
    {
        $this->foodDAL = new FoodDAL();
    }

//Gets functions from DAL layer
    function GetFoodTimes($ProductName)
    {
        try{
            return $this->foodDAL->GetFoodTimes($ProductName);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
    
    function GetAllFoodEvents()
    {
        try{
            return $this->foodDAL->GetAllFoodEvents();
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    function GetReservation($restaurantName, $startTime)
    {
        try{
            return $this->foodDAL->GetReservation($restaurantName, $startTime);
        }
        catch(Exception $e){
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }

    
}
