<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class Reproved extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
       throw new \DomainException('A reproved budget can not have a discount');
    }

    public function finalize(Budget $budget): void
    {
        $budget->state = new Finalized();
    }
}
