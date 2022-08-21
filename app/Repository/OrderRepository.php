<?php

declare(strict_types=1);

namespace App\Repository;

use App\Models\Order;
use App\Repository\Concerns\OrderInterface;

class OrderRepository implements OrderInterface
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
