<?php

namespace Tests\IutTroyes;

use IutTroyes\InvoiceLine;
use IutTroyes\Invoice;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{

    public function testItAdd()
    {
        $invoiceLine = new InvoiceLine(10, "Ma description", 0.2);
        $invoice = new Invoice();
        $invoice->add($invoiceLine);
        $this->assertEquals(1, $invoice->getNumberOfLines());
    }

    public function testItCalculateTotal()
    {
        $invoiceLine1 = new InvoiceLine(10, "Ma description", 0.2);
        $invoiceLine2 = new InvoiceLine(20, "Ma description 2", 0.1);
        $invoice = new Invoice();
        $invoice->add($invoiceLine1);
        $invoice->add($invoiceLine2);
        $this->assertEquals(34, $invoice->calculateTotal());
    }


}
