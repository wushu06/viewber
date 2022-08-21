<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Services\Concerns\ShippingInterface;
use App\Services\Couriers\CourierFactory;
use App\Services\OrderService;
use App\View;

class HomeController
{
    public function __construct(
        private OrderService $orders,
        private ShippingInterface $shipping
    )
    {
    }

    public function index(): View
    {
        return View::make('index');
    }

    public function sendDelivery(): View
    {
        $method = $_POST['method'];
        $courier = CourierFactory::getCourier($method);
        $orders = $this->orders->getByDay(date("Y-m-d"));
        $response = $this->shipping->send($orders, $courier);
        return View::make('index', ['message' => $response]);
    }
}
