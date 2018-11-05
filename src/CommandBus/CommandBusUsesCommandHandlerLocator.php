<?php
declare(strict_types=1);

namespace Mhr\CommandBus;

final class CommandBusUsesCommandHandlerLocator implements CommandBus
{
    /** @var CommandHandlerLocator */
    private $commandHandlerLocator;

    public function __construct(CommandHandlerLocator $commandHandlerLocator)
    {
        $this->commandHandlerLocator = $commandHandlerLocator;
    }

    public function dispatch(Command $command)
    {
        ($this
            ->commandHandlerLocator
            ->getHandler($command)
        )->handle($command);

    }
}
