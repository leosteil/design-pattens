<?php

namespace Alura\DesignPattern;

use Traversable;

class BudgetsList implements \IteratorAggregate
{
    /** @var Budget[]  */
    private array $budgets = [];

    public function addBudget(Budget $budget): void
    {
        $this->budgets[] = $budget;
    }

    public function getIterator(): \ArrayIterator
    {
        return new \ArrayIterator($this->budgets);
    }
}
