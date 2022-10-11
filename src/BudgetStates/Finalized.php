<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class Finalized extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        throw new \DomainException('A finalized budget can not have a discount');
    }
}
