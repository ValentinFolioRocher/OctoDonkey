<?php

namespace IutTroyes;

class InvoiceLine
{
    private $amount;
    private $description;
    private $vat;

    public function __construct($amount = 0, $description = "", $vat = 0){
        $this->amount = $amount;
        $this->description = $description;
        $this->vat = $vat;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    public function getVat()
    {
        return $this->vat;
    }

    public function calculateTotal(){
        return $this->amount * (1+$this->vat);
    }
}
