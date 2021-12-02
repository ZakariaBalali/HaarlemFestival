<?php

class Order
{
    private $OrderID;
    private $CustomerID;
    private $OrderDate;
    private $TotalPrice;

    public function __construct()
    {
        $get_arguments = func_get_args();
        $number_of_arguments = func_num_args();

        if (method_exists($this, $method_name = '__construct' . $number_of_arguments)) {
            call_user_func_array(array($this, $method_name), $get_arguments);
        }
    }

    public function __construct4($OrderID, $CustomerID, $OrderDate, $TotalPrice)
    {
        $this->OrderID = $OrderID;
        $this->CustomerID = $CustomerID;
        $this->OrderDate = $OrderDate;
        $this->TotalPrice = $TotalPrice;
    }

    public function __construct1($OrderID){
        $this->OrderID = $OrderID;
    }

    /**
     * @return mixed
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * @param mixed $OrderID
     */
    public function setOrderID($OrderID)
    {
        $this->OrderID = $OrderID;
    }

    /**
     * @return mixed
     */
    public function getCustomerID()
    {
        return $this->CustomerID;
    }

    /**
     * @param mixed $CustomerID
     */
    public function setCustomerID($CustomerID)
    {
        $this->CustomerID = $CustomerID;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->OrderDate;
    }

    /**
     * @param mixed $OrderDate
     */
    public function setOrderDate($OrderDate)
    {
        $this->OrderDate = $OrderDate;
    }

    /**
     * @return mixed
     */
    public function getTotalPrice()
    {
        return $this->TotalPrice;
    }

    /**
     * @param mixed $TotalPrice
     */
    public function setTotalPrice($TotalPrice)
    {
        $this->TotalPrice = $TotalPrice;
    }




}