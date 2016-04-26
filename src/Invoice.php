<?php

namespace IutTroyes;

use IutTroyes\InvoiceLine;

class Invoice
{
    private $invoiceLines;
    private $numberLines;

    public function __construct(){
        $this->invoiceLines = array();
        $this->numberLines = 0;
    }

    public function add(InvoiceLine $invoiceLine){
        $this->invoiceLines[] = $invoiceLine;
        $this->numberLines++ ;
    }



    public function getNumberOfLines(){
        return $this->numberLines ;
    }

    public function calculateTotal(){
        $total = 0 ;
        foreach ($this->invoiceLines as $invoiceLine) {
            $total += $invoiceLine->calculateTotal();
        }
        return $total;
    }
}
