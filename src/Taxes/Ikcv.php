<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

class Ikcv extends TaxWithTwAliquots
{
    protected function mustApplyMaximumTax(Budget $budget): bool
    {
        return $budget->value > 300 & $budget->itemsQuantity > 3;
    }

    protected function calculateMaximumTax(Budget $budget): float
    {
        return $budget->value * 0.04;
    }

    protected function calculateMinimumTax(Budget $budget): float
    {
        return $budget->value * 0.025;
    }
}
