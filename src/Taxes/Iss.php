<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Iss implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        return $budget->value * 0.06;
    }
}
