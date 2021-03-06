<?php
require_once '../Model/Event.php';

class Jazz
{
    private $Event_ID;
    private $BandName;
    private $Description;
    private $Location;
    private $Image;
    private $Event;

    function __construct($Event_ID, $BandName, $Description, $Location, $Image, $StartTime, $EndTime, $Price)
    {
        $this->Event_ID = $Event_ID;
        $this->BandName = $BandName;
        $this->Description = $Description;
        $this->Location = $Location;
        $this->Image = $Image;
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
    public function getBandName()
    {
        return $this->BandName;
    }

    /**
     * @param mixed $BandName
     */
    public function setBandName($BandName)
    {
        $this->BandName = $BandName;
    }

    /**
     * @return mixed
     */
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
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param mixed $Location
     */
    public function setLocation($Location)
    {
        $this->Location = $Location;
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