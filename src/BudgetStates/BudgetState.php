<?php

namespace Alura\DesignPattern\BudgetStates;

use Alura\DesignPattern\Budget;
use DomainException;

abstract class BudgetState
{
    /**
     * @throws DomainException
     */
    abstract public function calculateExtraDiscount(Budget $budget): float;

    /**
     * @throws DomainException
     */
    public function approve(Budget $budget): void
    {
        throw new DomainException('This budget can not be approved');
    }

    /**
     * @throws DomainException
     */
    public function reprove(Budget $budget): void
    {
        throw new DomainException('This budget can not be reproved');
    }

    /**
     * @throws DomainException
     */
    public function finalize(Budget $budget): void
    {
        throw new DomainException('This budget can not be finalized');
    }
}
