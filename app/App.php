<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\RouteNotFoundException;
use App\Repository\Concerns\OrderInterface;
use App\Repository\OrderRepository;
use App\Services\Concerns\ShippingInterface;
use App\Services\ShippingService;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class App
{

    public function __construct(private Container $container, protected Router $router, protected array $request)
    {
        $this->container->set(ShippingInterface::class, ShippingService::class);
        $this->container->set(OrderInterface::class, OrderRepository::class);
    }

    public function run(): void
    {
        try {
            echo $this->router->resolve($this->request['uri'], strtolower($this->request['method']));
        } catch (RouteNotFoundException) {
            http_response_code(404);

            echo View::make('error/404');
        } catch (NotFoundExceptionInterface | ContainerExceptionInterface $e) {
        }
    }
}
