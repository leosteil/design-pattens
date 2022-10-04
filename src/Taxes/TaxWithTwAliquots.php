<?php

namespace Alura\DesignPattern\Taxes;

use Alura\DesignPattern\Budget;

abstract class TaxWithTwAliquots implements Tax
{
    public function calculateTax(Budget $budget): float
    {
        if ($this->mustApplyMaximumTax($budget)) {
            return $this->calculateMaximumTax($budget);
        }

        return $this->calculateMinimumTax($budget);
    }

    abstract protected function mustApplyMaximumTax(Budget $budget): bool;

    abstract protected function calculateMaximumTax(Budget $budget): float;

    abstract protected function calculateMinimumTax(Budget $budget): float;
}
