<?php

declare(strict_types=1);

namespace App\Services\Couriers;

use App\Services\Concerns\CourierInterface;

class RoyalMail implements CourierInterface
{


    public function calculateCost($dimensions): int
    {
        return 99*$dimensions->width*$dimensions->height;
    }

    public function timeSlots(): array
    {
        return [
            '2022-08-20',
            '2022-08-22',
            '2022-08-28',
        ];
    }

    public function dispatch($order): array
    {
        $cost = $this->calculateCost($order->product->dimensions);

        return [
            'message' => 'Royal Mail Delivery cost '. $cost. ' Delivery Time '.$this->timeSlots()[0],
            'status' => 'success',
            'code' => 200
        ];
    }
}