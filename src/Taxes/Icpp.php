<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Icpp extends TaxWithTwAliquots
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 500;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.03;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.02;
    }
}
