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
        return $this->foodDAL->GetFoodTimes($ProductName);
    }
    
    function GetAllFoodEvents()
    {
        return $this->foodDAL->GetAllFoodEvents();
    }

    function GetReservation($restaurantName, $startTime)
    {
        return $this->foodDAL->GetReservation($restaurantName, $startTime);
    }

    
}
