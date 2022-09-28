<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\DiscountCalculator;
use Alura\DesignPattern\TaxCalculator;
use Alura\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

//$taxCalculator = new TaxCalculator();
//
//$budget = new Budget();
//$budget->value = 100;
//
//echo $taxCalculator->calculate($budget, new Icms());

$discountCalculator = new DiscountCalculator();

$budget = new Budget();
$budget->value = 854;
$budget->itemsQuantity = 6;

echo $discountCalculator->calculateDiscount($budget);
