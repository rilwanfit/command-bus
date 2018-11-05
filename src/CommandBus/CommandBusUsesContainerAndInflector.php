<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

class CommandBusUsesContainerAndInflector
{
    /** @var Container */
    private $container;
    /** @var Inflector */
    private $inflector;

    public function __construct(Container $container, Inflector $inflector)
    {
        $this->container = $container;
        $this->inflector = $inflector;
    }

    /** Execute a Command by passing it to a Handler */
    public function execute(Command $command)
    {
        $this->handler($command)->handle($command);
    }

    private function handler($command): CommandHandler
    {
        return $this->container->make(
            $this->inflector->inflect($command)
        );
    }
}
