<?php

declare(strict_types = 1);

namespace App\Services\Couriers;

use App\Services\Concerns\CourierInterface;

class Ups implements CourierInterface
{
    public function calculateCost($dimensions): int
    {
        return 10*$dimensions->width*$dimensions->height;
    }

    public function timeSlots(): array
    {
        return [
            '2022-09-01',
            '2022-09-20',
        ];
    }

    public function dispatch($order): array
    {
        $cost = $this->calculateCost($order->product->dimensions);

        return [
            'message' => 'UPS Delivery cost '. $cost. ' Delivery Time '.$this->timeSlots()[0],
            'status' => 'success',
            'code' => 200
        ];
    }
}