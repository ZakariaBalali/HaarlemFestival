<?php
require_once '../Model/Event.php';

class Historic //extends Event
{
    private $Event_ID;
    private $Language;
    private $Event;

    private $historic;

    public function __construct()
    {
        $get_arguments       = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct'.$number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    function __construct0(){
    }

    function __construct7($Event_ID, $Language, $ProductName, $StartTime, $EndTime, $Seats, $Price)
    {
        $this->Event_ID = $Event_ID;
        $this->Language = $Language;
        $this->Event = new Event($ProductName, $StartTime, $EndTime, $Seats, $Price);
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
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param mixed
     */
    public function setLanguage($Language)
    {
        $this->Language = $Language;
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