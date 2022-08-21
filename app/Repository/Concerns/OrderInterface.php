<?php

namespace App\Repository\Concerns;

interface OrderInterface
{
    public function getByDay($day);
}