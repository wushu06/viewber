<?php

namespace App\Services\Concerns;

interface OrderInterface
{
    public function getByDay($day);
}