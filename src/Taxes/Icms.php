<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Icms implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.1;
    }
}
