<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Order;
use App\Services\Concerns\OrderInterface;

class OrderService implements OrderInterface
{
    public function __construct(
        protected Order $order,
    )
    {
    }

    /**
     * @param $day
     * @return object
     */
    public function getByDay($day)
    {
        return $this->order->get($day);
    }

}
