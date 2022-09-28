<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Discounts\MoreThanFiveHundredDollars;
use Alura\DesignPattern\Discounts\MoreThanFiveItems;
use Alura\DesignPattern\Discounts\WithoutDiscount;

class DiscountCalculator
{
    public function calculateDiscount(Budget $budget): float
    {
        $discountChain = new MoreThanFiveItems(
            new MoreThanFiveHundredDollars(
                new WithoutDiscount()
            )
        );

        return $discountChain->calculateDiscount($budget);
    }
}
