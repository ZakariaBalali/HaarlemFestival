<?php

class User{
    private $FirstName;
    private $LastName;
    private $Email;
    private $OrderNumber;

    function __construct($FirstName,$LastName,$Email,$OrderNumber)
    {
        $this->$FirstName = $FirstName;
        $this->$LastName = $LastName;
        $this->$Email = $Email;
        $this->$OrderNumber = $OrderNumber;
    }

      /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
    }
      /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
    }
      /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->Email;
    }
      /**
     * @return mixed
     */
    public function getOrderNumber()
    {
        return $this->OrderNumber;
    }




}


?>