<?php

declare(strict_types=1);

namespace App\Services;

use App\Services\Concerns\ShippingInterface;

class ShippingService implements ShippingInterface
{

    public function send(object $orders, $courier): array
    {
        return $courier->dispatch($orders);
    }

}
