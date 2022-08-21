<?php

namespace App\Services\Concerns;

interface CourierInterface
{
    public function calculateCost($dimensions): int;

    public function timeSlots(): array;

    public function dispatch(object $order): array;
}