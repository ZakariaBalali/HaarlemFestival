<?php

class Combi
{
    private $TicketName;

    function __construct($TicketName)
    {
        $this->TicketName = $TicketName;
    }

    public function getTicketName()
    {
        return $this->TicketName;
    }

    public function setTicketName($TicketName)
    {
        $this->TicketName = $TicketName;
    }

}