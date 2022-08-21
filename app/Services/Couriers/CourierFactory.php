<?php

namespace App\Services\Couriers;

use JetBrains\PhpStorm\Pure;

class CourierFactory
{

    #[Pure]
    public static function getCourier($type)
    {

        return match ($type) {
            'ups' => new Ups(),
            default => new RoyalMail(),
        };
    }

}
