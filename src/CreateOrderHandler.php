<?php

namespace Alura\DesignPattern;

class CreateOrderHandler
{
    public function execute(CreateOrder $createOrder)
    {
        $budget = new Budget();
        $budget->itemsQuantity = $createOrder->getItemsQuantity();
        $budget->value = $createOrder->getBudgetValue();


        $order = new Order();
        $order->finalizedAt = new \DateTimeImmutable();
        $order->customer = $createOrder->getCustomerName();
        $order->budget = $budget;
    }
}
