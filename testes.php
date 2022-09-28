<?php

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\TaxCalculator;
use Alura\DesignPattern\Taxes\Icms;

require 'vendor/autoload.php';

$taxCalculator = new TaxCalculator();

$budget = new Budget();
$budget->value = 100;

echo $taxCalculator->calculate($budget, new Icms());
