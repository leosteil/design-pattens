<?php

namespace Alura\DesignPattern\CreateOrderActions;

use Alura\DesignPattern\Order;

class LogOrderCreation implements PostOrderAction
{
    public function executeAction(Order $order): void
    {
        echo "Generating log of order creation";
    }
}
