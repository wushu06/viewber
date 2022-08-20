<?php

declare(strict_types=1);

namespace App\Console;

use App\Container;
use App\Exceptions\CommandNotFoundException;
use App\Ioc;
use App\Services\PaymentGatewayService;
use App\Services\PaymentInterface;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class Command
{
    public function __construct(private Ioc $container)
    {
        $this->container->set(PaymentInterface::class, PaymentGatewayService::class);
    }

    /**
     * @throws CommandNotFoundException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function process($command)
    {
        $className = '\App\Console\\' . $command;
        if (class_exists($className)) {
            $class = $this->container->get($className);
            $method = 'process';
            if (method_exists($class, $method)) {
                return call_user_func_array([$class, $method], []);
            }
        }

        throw new CommandNotFoundException();
    }
}
