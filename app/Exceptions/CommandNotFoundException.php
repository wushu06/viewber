<?php

declare(strict_types = 1);

namespace App\Exceptions;

class CommandNotFoundException extends \Exception
{
    protected $message = 'Command Not Found';
}
