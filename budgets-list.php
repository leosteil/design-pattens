<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\BudgetsList;
use Alura\DesignPattern\CreateOrder;
use Alura\DesignPattern\CreateOrderActions\SaveOrder;
use Alura\DesignPattern\CreateOrderActions\SentOderByEmail;
use Alura\DesignPattern\CreateOrderHandler;
use Alura\DesignPattern\Order;

$budgetsList = [];

$budget1 = new Budget();
$budget1->itemsQuantity = 1;
$budget1->approve();
$budget1->value = 1234;

$budget2 = new Budget();
$budget2->itemsQuantity = 2;
$budget2->finalize();
$budget2->value = 1234555;

$budget3 = new Budget();
$budget3->itemsQuantity = 45;
$budget3->reprove();
$budget3->value = 54;

$budgetsList = new BudgetsList();
$budgetsList->addBudget($budget1);
$budgetsList->addBudget($budget2);
$budgetsList->addBudget($budget3);

foreach ($budgetsList as $budget) {
    echo "Value: " . $budget->value . PHP_EOL;
    echo "Status: " . get_class($budget->state) . PHP_EOL;
    echo "Items Quantity: " . $budget->itemsQuantity . PHP_EOL;

    echo PHP_EOL;
}
