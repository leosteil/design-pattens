<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Taxes\Tax;

class TaxCalculator
{
    public function calculate(Budget $budget, Tax $tax): float
    {
        return $tax->calculateTax($budget);
    }
}
