<?php

namespace Alura\DesignPattern;

class CreateOrder
{
    private float $budgetValue;
    private int $itemsQuantity;
    private string $customerName;

    public function __construct(float $budgetValue, int $itemsQuantity, string $customerName)
    {
        $this->budgetValue = $budgetValue;
        $this->itemsQuantity = $itemsQuantity;
        $this->customerName = $customerName;
    }

    public function getBudgetValue(): float
    {
        return $this->budgetValue;
    }

    public function getItemsQuantity(): int
    {
        return $this->itemsQuantity;
    }

    public function getCustomerName(): string
    {
        return $this->customerName;
    }
}
