<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

use Illuminate\Container\Container as IoC;

class ContainerUsesLaravel implements Container
{
    /** @var IoC */
    private $container;

    public function __construct(IoC $container)
    {
        $this->container = $container;
    }

    public function make(string $class)
    {
        return $this->container->make($class);
    }
}
