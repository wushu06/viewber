<?php
namespace App\Services\Concerns;

use App\Models\Order;

interface CourierInterface
{
    public function calculateCost($dimensions): int;
    public function timeSlots(): array;
    public function dispatch(Order $order): array;
}