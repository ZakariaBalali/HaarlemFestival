<?php

class Customer{
    private $CustomerID;
    private $FirstName;
    private $LastName;
    private $Email;
    private $PhoneNumber;
    private $OrderID;

    function __construct( $CustomerID,$FirstName,$LastName,$Email,$PhoneNumber,$OrderID)
    {
        $this->$CustomerID= $CustomerID;
        $this->$FirstName = $FirstName;
        $this->$LastName = $LastName;
        $this->$Email = $Email;
        $this->$PhoneNumber = $PhoneNumber;
        $this->$OrderID = $OrderID;
    }

    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
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
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
       /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }    




}


?>