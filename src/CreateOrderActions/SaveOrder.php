<?php

namespace Alura\DesignPattern\CreateOrderActions;

use Alura\DesignPattern\Order;

class SaveOrder implements PostOrderAction
{
    public function executeAction(Order $order): void
    {
        echo "Save order in DB";
    }
}
