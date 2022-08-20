<?php

declare(strict_types = 1);

namespace App\Console;

use App\Services\OrderService;
use App\View;

class Search
{
    public function __construct(private OrderService $invoiceService)
    {
    }

    public function process()
    {
        return $this->invoiceService->process([], 25);

    }
}
