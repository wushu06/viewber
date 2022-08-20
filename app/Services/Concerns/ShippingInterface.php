<?php
namespace App\Services\Concerns;

interface ShippingInterface
{
    public function send(object $orders, $courier);
}