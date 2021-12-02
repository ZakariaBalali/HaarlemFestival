<?php

class OrderItem
{
    private $OrderID;
    private $EventID;
    private $Amount;
    private $UnitPrice;
    private $UnitBtw;
    private $StartTime;


    public function __construct($OrderID, $EventID, $Amount, $UnitPrice, $UnitBtw, $StartTime)
    {
        $this->OrderID = $OrderID;
        $this->EventID = $EventID;
        $this->Amount = $Amount;
        $this->UnitPrice = $UnitPrice;
        $this->UnitBtw = $UnitBtw;
        $this->StartTime = $StartTime;
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
    public function getEventID()
    {
        return $this->EventID;
    }

    /**
     * @param mixed $EventID
     */
    public function setEventID($EventID)
    {
        $this->EventID = $EventID;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param mixed $Amount
     */
    public function setAmount($Amount)
    {
        $this->Amount = $Amount;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param mixed $UnitPrice
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;
    }

    /**
     * @return mixed
     */
    public function getUnitBtw()
    {
        return $this->UnitBtw;
    }

    /**
     * @param mixed $UnitBtw
     */
    public function setUnitBtw($UnitBtw)
    {
        $this->UnitBtw = $UnitBtw;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * @param mixed $StartTime
     */
    public function setStartTime($StartTime)
    {
        $this->StartTime = $StartTime;
    }



}