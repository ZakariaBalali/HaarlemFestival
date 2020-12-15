<?php
require_once '../Model/Event.php';

class Food
{
    private $Event_ID;
    private $RestaurantName;
    private $Stars;
    private $Description;
    private $Image;
    private $Cuisine;
    private $Event;

    function __construct($Event_ID, $RestaurantName, $Stars, $Description, $Image, $Cuisine, $StartTime, $EndTime, $Price)
    {
        $this->Event_ID = $Event_ID;
        $this->RestaurantName = $RestaurantName;
        $this->Stars = $Stars;
        $this->Description = $Description;
        $this->Image = $Image;
        $this->Cuisine = $Cuisine;
        $this->Event = new Event($StartTime, $EndTime, $Price);
    }

    public function getEvent_ID()
    {
        return $this->Event_ID;
    }

    public function setEvent_ID($Event_ID)
    {
        $this->Event_ID = $Event_ID;
    }

    /**
     * @return mixed
     */
    public function getRestaurantName()
    {
        return $this->RestaurantName;
    }

    /**
     * @param mixed $RestaurantName
     */
    public function setRestaurantName($RestaurantName)
    {
        $this->RestaurantName = $RestaurantName;
    }

    /**
     * @return mixed
     */
    public function getStars()
    {
        return $this->Stars;
    }

    /**
     * @param mixed $Stars
     */
    public function setStars($Stars)
    {
        $this->Stars = $Stars;
    }

    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param mixed $Description
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->Image;
    }

    /**
     * @param mixed $Image
     */
    public function setImage($Image)
    {
        $this->Image = $Image;
    }

    /**
     * @return mixed
     */
    public function getCuisine()
    {
        return $this->Cuisine;
    }

    /**
     * @param mixed $Cuisine
     */
    public function setCuisine($Cuisine)
    {
        $this->Cuisine = $Cuisine;
    }
    
    /**
     * @return Event
     */
    public function getEvent()
    {
        return $this->Event;
    }

    /**
     * @param Event $Event
     */
    public function setEvent($Event)
    {
        $this->Event = $Event;
    }
}
