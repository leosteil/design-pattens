<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

interface Tax
{
    public function calculateTax(Budget $budget): float;
}
