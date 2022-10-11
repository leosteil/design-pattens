<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\BudgetStates\BudgetState;
use Alura\DesignPattern\BudgetStates\WaitingApproval;

class Budget
{
    public int $itemsQuantity;
    public float $value;
    public BudgetState $state;

    public function __construct()
    {
        $this->state = new WaitingApproval();
    }

    public function applyExtraDiscount(): void
    {
        $this->value -= $this->state->calculateExtraDiscount($this);
    }

    public function approve(): void
    {
        $this->state->approve($this);
    }

    public function reprove(): void
    {
        $this->state->approve($this);
    }

    public function finalize(): void
    {
        $this->state->approve($this);
    }
}
