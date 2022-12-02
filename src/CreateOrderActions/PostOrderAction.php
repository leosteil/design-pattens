<?php

namespace Alura\DesignPattern\CreateOrderActions;

use Alura\DesignPattern\Order;

interface PostOrderAction
{
    public function executeAction(Order $order): void;
}
