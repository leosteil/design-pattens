<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Budget;
use Alura\DesignPattern\CreateOrder;
use Alura\DesignPattern\CreateOrderActions\SaveOrder;
use Alura\DesignPattern\CreateOrderActions\SentOderByEmail;
use Alura\DesignPattern\CreateOrderHandler;
use Alura\DesignPattern\Order;

$budgetValue  = $argv[1];
$itemsNumber = $argv[2];
$customerName = $argv[3];

$createOrder = new CreateOrder($budgetValue, $itemsNumber, $customerName);

$createOrderHandler = new CreateOrderHandler();
$createOrderHandler->addAction(new SaveOrder());
$createOrderHandler->addAction(new SentOderByEmail());

$createOrderHandler->execute($createOrder);

