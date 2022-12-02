<?php

namespace Alura\DesignPattern\CreateOrderActions;

use Alura\DesignPattern\Order;

class SentOderByEmail implements PostOrderAction
{
    public function executeAction(Order $order): void
    {
        echo "Sending e-mail after order created";
    }
}
