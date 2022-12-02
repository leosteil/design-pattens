<?php

namespace Alura\DesignPattern;

class Order
{
    public string $customer;
    public \DateTimeInterface $finalizedAt;
    public Budget $budget;
}
