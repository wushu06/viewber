<?php

declare(strict_types = 1);

namespace App\Models;

class Order extends Model
{

    public function get($arg): object
    {
        // get from database;
        return (object)[
            'id' => 1,
            'product' => (object)[
                'name' => 'pr one',
                'dimensions' => (object)[
                    'width' => 10,
                    'height' => 10,
                ]
            ]
        ];
    }

}