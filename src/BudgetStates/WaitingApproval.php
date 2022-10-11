<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;

class WaitingApproval extends BudgetState
{
    public function calculateExtraDiscount(Budget $budget): float
    {
        return $budget->value * 0.05;
    }

    public function approve(Budget $budget): void
    {
        $budget->state = new Approved();
    }

    public function reprove(Budget $budget): void
    {
        $budget->state = new Reproved();
    }
}
