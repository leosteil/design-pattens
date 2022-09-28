<?php

namespace Alura\DesignPattern\Discounts;

use Alura\DesignPattern\Budget;

class WithoutDiscount extends Discount
{
    public function __construct()
    {
        parent::__construct(null);
    }

    public function calculateDiscount(Budget $budget): float
    {
        return 0;
    }
}
