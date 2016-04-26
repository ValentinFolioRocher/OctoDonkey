<?php

namespace Tests\IutTroyes;

use IutTroyes\InvoiceLine;

class InvoiceLineTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @dataProvider getAmounts
     */
    public function testItSetAmount($amount)
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setAmount($amount);
        $this->assertEquals($amount, $invoiceLine->getAmount());
    }

    public function getAmounts()
    {
        return [
            [10],
            [40]
        ];
    }

    public function testItSetDescription()
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setDescription("Ma description");
        $this->assertEquals("Ma description", $invoiceLine->getDescription());
    }

    public function testItSetVat()
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setVat(0.2);
        $this->assertEquals(0.2, $invoiceLine->getVat());
    }

    public function testItcalculateTotal()
    {
        $invoiceLine = new InvoiceLine();
        $invoiceLine->setAmount(10);
        $invoiceLine->setVat(0.2);
        $this->assertEquals(12, $invoiceLine->calculateTotal());
    }


}
