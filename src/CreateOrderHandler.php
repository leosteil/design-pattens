<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\CreateOrderActions\LogOrderCreation;
use Alura\DesignPattern\CreateOrderActions\PostOrderAction;
use Alura\DesignPattern\CreateOrderActions\SaveOrder;
use Alura\DesignPattern\CreateOrderActions\SentOderByEmail;

class CreateOrderHandler
{
    /** @var PostOrderAction[]  */
    private array $actions = [];

    public function addAction(PostOrderAction $action): void
    {
        $this->actions[] = $action;
    }

    public function execute(CreateOrder $createOrder)
    {
        $budget = new Budget();
        $budget->itemsQuantity = $createOrder->getItemsQuantity();
        $budget->value = $createOrder->getBudgetValue();

        $order = new Order();
        $order->finalizedAt = new \DateTimeImmutable();
        $order->customer = $createOrder->getCustomerName();
        $order->budget = $budget;

        foreach ($this->actions as $action) {
            $action->executeAction($order);
        }
    }
}
